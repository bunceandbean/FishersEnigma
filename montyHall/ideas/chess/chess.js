var pieceOrder = [];
var boardMatrix = [];
function createBoard(){
  pieceOrder = ["rook","bishop","knight","king","queen","knight","bishop","rook","pawn","pawn","pawn","pawn","pawn","pawn","pawn","pawn"];
  var board = document.getElementById("board");
  var row = 1;
  var alternate = -1;
  for(var row =1; row <= 8; row++ ){
    for(var i = 1; i <= 8; i++){
    var boardPiece = document.createElement("div");
    boardPiece.setAttribute("style","grid-column-start:" + i + ";grid-column-end:" + (i+1) + ";grid-row-start:" + row + ";grid-row-end:" + (row+1));
    boardPiece.setAttribute("class", (alternate > 0)? "board-color-white":"board-color-black");
    board.appendChild(boardPiece);
    alternate *= -1;
  }
  alternate*=-1;
  }
  setPieces();
}

function setPieces(){
  var fullBoard = document.getElementById("board");
  var x = 0;
  var y = 0;
  for(var black = 0; black < 16; black++){
    var pieceImg = document.createElement("img");
    const piece = new Piece(pieceOrder[black],x+"vmin",y+"vmin");
    x += 11.25;
    if(black > 6){
      if(black == 7){
        x =0;
      }
      y= 11.25;
    }
    pieceImg.setAttribute("src", piece.setImage("B"));
    pieceImg.setAttribute("style","left: " + piece.getX() + ";top:" + piece.getY());
    pieceImg.setAttribute("onclick","expand(this);");
    pieceImg.setAttribute("id", piece.getName().substring(2,3));
    fullBoard.appendChild(pieceImg);
    // fullBoard.children[black].appendChild(pieceImg);
  }
x = 0;
y = 78.75;
for(var white =0; white < 16; white++){
  var pieceImg = document.createElement("img");
  const piece = new Piece(pieceOrder[white],x+"vmin",y+"vmin");
  x += 11.25;
  if(white > 6){
    if(white == 7){
      x =0;
    }
    y= 67.50;
  }
  pieceImg.setAttribute("src", piece.setImage("W"));
  pieceImg.setAttribute("style","left: " + piece.getX() + ";top:" + piece.getY());
  pieceImg.setAttribute("onclick","move(this);");
  pieceImg.setAttribute("id", piece.getName().substring(2,3));
  fullBoard.appendChild(pieceImg);
}
}

class Piece{
  constructor(name,x ,y){
    this.name = name;
    this.x = x;
    this.y = y;
  }
  setImage(type){
    return "images/" + this.name + type + ".png";
  }
  getX(){
    return this.x;
  }
  getY(){
    return this.y;
  }
  getName(){
    return this.name;
  }
}
function move(item){
  if(document.querySelector(".active") != null){
    document.querySelector(".active").classList.toggle("active");
  }
  item.classList.toggle("active");
}

document.addEventListener("keydown",function(e){
  var textstr = "";
  var validImgs = [];
  item = document.querySelector('.active');
  if(e.code == "ArrowUp"){
    item.style.top = parseFloat(item.style.top.substring(0,item.style.top.indexOf("v"),10)) - 11.25 + "vmin";
  }
  if(e.code == "ArrowDown"){
    item.style.top = parseFloat(item.style.top.substring(0,item.style.top.indexOf("v"),10)) + 11.25 + "vmin";
  }
  if(e.code == "ArrowLeft"){
    item.style.left = parseFloat(item.style.left.substring(0,item.style.left.indexOf("v"),10)) - 11.25 + "vmin";
  }
  if(e.code == "ArrowRight"){
    item.style.left = parseFloat(item.style.left.substring(0,item.style.left.indexOf("v"),10)) + 11.25 + "vmin";
  }

for(var i = 63; i < 96; i++){
  if(document.querySelector('#board').children[i].style.top == "45vmin"){

    validImgs.push(document.querySelector('#board').children[i]);
  }
}
if(validImgs.length == 5){
if(extract(sort(validImgs)) == "swine"){
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
    answer+= arr[i].id;
  }
  return answer;
}
