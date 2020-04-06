var pieceOrder = [];
var boardMatrix = [];
var whitePieces = [];
var blackPieces = [];

class Board{
  constructor(){
    this.whitePieces = [];
    this.blackPieces = [];
    this.keyWord = 'swine';
  }

  setPieces(){
    this.blackPieces.push(new Pawn(0,1,false,'w'));
    this.blackPieces.push(new Pawn(1,1,false,'w'));
    this.blackPieces.push(new Pawn(2,1,false,'w'));
    this.blackPieces.push(new Pawn(3,1,false,'w'));
    this.blackPieces.push(new Pawn(4,1,false,'w'));
    this.blackPieces.push(new Pawn(5,1,false,'w'));
    this.blackPieces.push(new Pawn(6,1,false,'w'));
    this.blackPieces.push(new Pawn(7,1,false,'w'));
    this.blackPieces.push(new Rook(0,0,false,'o'));
    this.blackPieces.push(new Rook(7,0,false,'o'));
    this.blackPieces.push(new Bishop(1,0,false,'s'));
    this.blackPieces.push(new Bishop(6,0,false,'s'));
    this.blackPieces.push(new Knight(2,0,false,'i'));
    this.blackPieces.push(new Knight(5,0,false,'i'));
    this.blackPieces.push(new King(3,0,false,'n'));
    this.blackPieces.push(new Queen(4,0,false,'e'));
//////////////////////////////////////////////////////////////////
//movable pieces

    this.whitePieces.push(new Pawn(0,6,true,'w'));
    this.whitePieces.push(new Pawn(1,6,true,'w'));
    this.whitePieces.push(new Pawn(2,6,true,'w'));
    this.whitePieces.push(new Pawn(3,6,true,'w'));
    this.whitePieces.push(new Pawn(4,6,true,'w'));
    this.whitePieces.push(new Pawn(5,6,true,'w'));
    this.whitePieces.push(new Pawn(6,6,true,'w'));
    this.whitePieces.push(new Pawn(7,6,true,'w'));
    this.whitePieces.push(new Rook(0,7,true,'o'));
    this.whitePieces.push(new Rook(7,7,true,'o'));
    this.whitePieces.push(new Bishop(1,7,true,'s'));
    this.whitePieces.push(new Bishop(6,7,true,'s'));
    this.whitePieces.push(new Knight(2,7,true,'i'));
    this.whitePieces.push(new Knight(5,7,true,'i'));
    this.whitePieces.push(new King(3,7,true,'n'));
    this.whitePieces.push(new Queen(4,7,true,'e'));
    for(var i =0; i< this.whitePieces.length; i++){
      this.whitePieces[i].createImg();
      this.blackPieces[i].createImg();
    }
  }

  getPieceAt(x,y){
    for(var i =0; i < this.whitePieces.length; i++){
      if(this.whitePieces[i].x == x && this.whitePieces[i].y == y){
        return this.whitePieces[i];
      }
    }
    for(var i =0; i < this.whitePieces.length; i++){
      if(this.blackPieces[i].x == x && this.blackPieces[i].y == y){
        return this.blackPieces[i];
      }
    }
  }
}


class Piece{
  constructor(x,y){
    this.x = x;
    this.y = y;
    this.status = false;
    this.imgDOM = null;
    this.moving = false;
  }

  move(x, y){
    if( x>=0 && x<=7 && y>=0 && y<=7) {
    this.checkCollision(x,y);
    this.x = x;
    this.y = y;
    this.updateImg(this.imgDOM,x,y);
  }
  }

  updateImg(img,x,y){
    if(!this.status){
    img.style = "left:" + (this.x * 11.25) + "vmin;top:" + (this.y * 11.25) + "vmin";
  }else{
    for(var i =0; i < boardObj.whitePieces.length; i++){
      if(boardObj.whitePieces[i].status){
    boardObj.whitePieces[i].imgDOM.setAttribute("class","dead");
    boardObj.whitePieces[i].y = 8;
  }
  }
  }
  }
  checkCollision(x,y){
    if(boardObj.getPieceAt(x,y) != null){
      if(boardObj.getPieceAt(x,y).isWhite){
      boardObj.getPieceAt(x,y).status = true;
    }
      this.status = true;
    }
  }
}

var boardObj = new Board();
function createBoard(){
  pieceOrder = ["rook","bishop","knight","king","queen","knight","bishop","rook","Piece","pawn","pawn","pawn","pawn","pawn","pawn","pawn"];
  var board = document.getElementById("board");
  var row = 1;
  var alternate = -1;
  for(var row =1; row <= 8; row++ ){
    for(var i = 1; i <= 8; i++){
    var boardTile = document.createElement("div");
    boardTile.setAttribute("style","grid-column-start:" + i + ";grid-column-end:" + (i+1) + ";grid-row-start:" + row + ";grid-row-end:" + (row+1));
    boardTile.setAttribute("class", (alternate > 0)? "board-color-white":"board-color-black");
    board.appendChild(boardTile);
    alternate *= -1;
  }
  alternate*=-1;
  }
  boardObj.setPieces();
}

class Pawn extends Piece{
  constructor(x,y,whiteness,value){
    super(x,y);
    this.value = value;
    this.isWhite = whiteness;
    this.imgSrc = (whiteness)? "pawnW.png": "pawnB.png";
  }
  createImg(){
    let img = document.createElement("img");
    img.src = "images/" + this.imgSrc;
    img.style = "left:" + (this.x * 11.25) + "vmin;top:" + (this.y * 11.25) + "vmin";
    img.setAttribute("onload","setImgPiece(this)");
    img.setAttribute("onclick", "activate(this);setImgPiece(this)");
    $('#board').append(img);
  }
}

class Bishop extends Piece{
  constructor(x,y,whiteness,value){
    super(x,y);
    this.value = value;
    this.isWhite = whiteness;
    this.imgSrc = (whiteness)? "bishopW.png": "bishopB.png";
  }
  createImg(){
    let img = document.createElement("img");
    img.src = "images/" + this.imgSrc;
    img.style = "left:" + (this.x * 11.25) + "vmin;top:" + (this.y * 11.25) + "vmin";
    img.setAttribute("onload","setImgPiece(this)");
    img.setAttribute("onclick", "activate(this);setImgPiece(this)");
    $('#board').append(img);
  }
}
class Rook extends Piece{
  constructor(x,y,whiteness,value){
    super(x,y);
    this.value = value;
    this.isWhite = whiteness;
    this.imgSrc = (whiteness)? "rookW.png": "rookB.png";
  }
  createImg(){
    let img = document.createElement("img");
    img.src = "images/" + this.imgSrc;
    img.style = "left:" + (this.x * 11.25) + "vmin;top:" + (this.y * 11.25) + "vmin";
    img.setAttribute("onload","setImgPiece(this)");
    img.setAttribute("onclick", "activate(this);setImgPiece(this)");
    $('#board').append(img);
  }
}
class Knight extends Piece{
  constructor(x,y,whiteness,value){
    super(x,y);
    this.value = value;
    this.isWhite = whiteness;
    this.imgSrc = (whiteness)? "knightW.png": "knightB.png";
  }
  createImg(){
    let img = document.createElement("img");
    img.src = "images/" + this.imgSrc;
    img.style = "left:" + (this.x * 11.25) + "vmin;top:" + (this.y * 11.25) + "vmin";
    img.setAttribute("onload","setImgPiece(this)");
    img.setAttribute("onclick", "activate(this);setImgPiece(this)");
    $('#board').append(img);
  }
}
class Queen extends Piece{
  constructor(x,y,whiteness,value){
    super(x,y);
    this.value = value;
    this.isWhite = whiteness;
    this.imgSrc = (whiteness)? "queenW.png": "queenB.png";
  }
  createImg(){
    let img = document.createElement("img");
    img.src = "images/" + this.imgSrc;
    img.style = "left:" + (this.x * 11.25) + "vmin;top:" + (this.y * 11.25) + "vmin";
    img.setAttribute("onload","setImgPiece(this)");
    img.setAttribute("onclick", "activate(this);setImgPiece(this)");
    $('#board').append(img);
  }
}
class King extends Piece{
  constructor(x,y,whiteness,value){
    super(x,y);
    this.value = value;
    this.isWhite = whiteness;
    this.imgSrc = (whiteness)? "kingW.png": "kingB.png";
  }
  createImg(){
    let img = document.createElement("img");
    img.src = "images/" + this.imgSrc;
    img.style = "left:" + (this.x * 11.25) + "vmin;top:" + (this.y * 11.25) + "vmin";
    img.setAttribute("onload","setImgPiece(this)");
    img.setAttribute("onclick", "activate(this);setImgPiece(this)");
    $('#board').append(img);
  }
}


function setImgPiece(image){
  let x = parseFloat(image.style.left.substring(0,image.style.left.indexOf("v"),10))/11.25;
  let y = parseFloat(image.style.top.substring(0,image.style.top.indexOf("v"),10))/11.25;

  for(var i =0; i < boardObj.whitePieces.length; i++){
    if(boardObj.whitePieces[i].x == x && boardObj.whitePieces[i].y == y){
      boardObj.whitePieces[i].imgDOM = image;
    }
  }
  for(var i =0; i < boardObj.whitePieces.length; i++){
    if(boardObj.blackPieces[i].x == x && boardObj.blackPieces[i].y == y){
      boardObj.blackPieces[i].imgDOM = image;
    }
  }

}
function activate(item){
for(var i =0; i <boardObj.blackPieces.length; i++){
  if(item == boardObj.blackPieces[i].imgDOM){
    alert("You cannot control the black pieces");
    return;
  }
}
  if(document.querySelector(".active") != null){
    document.querySelector(".active").classList.toggle("active");
  }
  item.classList.toggle("active");
}

//makes thing movable with arrow keys
document.addEventListener("keydown",function(e){
  var textstr = "";
  var validImgs = [];
  item = document.querySelector('.active');
  for(var i =0; i < boardObj.whitePieces.length; i++){
    if(boardObj.whitePieces[i].imgDOM == item){
      var target = boardObj.whitePieces[i];
      var targetMimic = boardObj.blackPieces[i];
    }
  }
  if(e.code == "ArrowUp"){
    target.move(target.x, (target.y-1));
    targetMimic.move(targetMimic.x, (targetMimic.y+1));
  }
  if(e.code == "ArrowDown"){
    target.move(target.x, target.y + 1);
    targetMimic.move(targetMimic.x, (targetMimic.y-1));
  }
  if(e.code == "ArrowLeft"){
    target.move(target.x-1, target.y);
    targetMimic.move(targetMimic.x+1, targetMimic.y);
  }
  if(e.code == "ArrowRight"){
    target.move(target.x +1, target.y);
    targetMimic.move(targetMimic.x-1, targetMimic.y);
  }

for(var i = 63; i < 96; i++){
  if(document.querySelector('#board').children[i].style.top == "45vmin"){

    validImgs.push(document.querySelector('#board').children[i]);
  }
}
if(validImgs.length == 5){
if(extract(sort(validImgs)) == boardObj.keyWord){
  alert("you spelled: swine");
}
}
});


function sort(arr){
  var count =0;
  var numberArr = [];
  for(var i =0; i < 5; i++){
    numberArr[i] = parseFloat(arr[i].style.left.substring(0,arr[i].style.left.indexOf("v"),10));
  }
  for(var j =0; j < 4; j++){
    var minInd = j;
    for(var k=j+1; k <5; k++ ){
      if(numberArr[k] < numberArr[minInd]){
        minInd = k;
      }
    }
      if(j != minInd){
        var temp = numberArr[j];
        var rTemp = arr[j];
        numberArr[j] = numberArr[minInd];
        arr[j] = arr[minInd];
        numberArr[minInd] = temp;
        arr[minInd] = rTemp;
        count++;
      }
  }
  return arr;
}
function extract(arr){
  var answer = "";
  for(var i = 0; i < 5; i++){
    for(var k =0; k < boardObj.whitePieces.length; k++){
      if(arr[i] == boardObj.whitePieces[k].imgDOM){
    answer+= boardObj.whitePieces[k].value;
  }
  }
  }
  return answer;
}
