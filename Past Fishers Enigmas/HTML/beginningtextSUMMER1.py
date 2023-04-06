from twilio.rest import Client


# Your Account Sid and Auth Token from twilio.com/console
# DANGER! This is insecure. See http://twil.io/secure
account_sid = 'AC3388b4a385c22f14144522a8cc68f84b'
auth_token = '24560129d85a21e73ad4c507f4ed650e'
client = Client(account_sid, auth_token)


numlist = {
    "Joe":"+13174453648",
    "Libby":"+13174763323",
    "Ali":"+13174486628",
    "Braden":"+13177533474",
    "Tommy":"+13176011576",
    "Jonah":"+13179227505",
    "Brynn":"+13176275599",
    "Zayd":"+13174323813",
    "Aidan":"+13177789838",
    "Georgia":"+13177907738",
    "Kaylin":"+13172055033",
    "Katie":"+13172199194",
    "Josh":"+13174505049",
    "Blake":"+13179183332",
    "Feui":"+13179035146",
    "Zach":"+13177746367",
    "Kam":"+13174350192",
    "Gracey":"+13179181928",
    "Kylie":"+13176490578",
    "Jill":"+13173537886",
    "Abigail":"+13173740477",
    "Ben":"+13174039904"


}
newmessage = "As mentioned in the puzzle, you have until the last firework on the Fourth of July to reach the end. Good Luck."
line = "So here you go, dance and act And keep in mind the year to inform For when these pieces began to perform"
hint = "Hint: 4 performing pieces in this puzzle"
stg2 = "Welcome to stage two, the last number was 1606 from Macbeth, 'Don’t be a fool I ask of thee For you will be heard no more after you leave the stage'"
stg2hint = "Have you seen the sign?"
stg5 = "Stage 5 has commenced. Good luck. Think."
nohints = "Keep in mind, for this stage, no hints or assistance will be given. Good luck."
parthint = "Look for a pattern in these places, for they might be used by someone else's cases."
sh = "In other words, other people besides you might be around these places for other goals."
runningrivers = "https://benlilley.neocities.org/runningrivers.xml"
testlist = {
    "Ben":"+13174039904"
}

# for name in numlist:
#     message = client.messages \
#                     .create(
#                          # body="Hello " + name + ", you have been invited to a puzzle challenge. Your friends, " +
#                          # "such as Tommy, Feui, and Ali, have also recieved this challenge (showing its legitimacy). " +
#                          # "Please click on this link to download the word document with your first riddle. " +
#                          # "https://drive.google.com/open?id=1nVn5_akIpSuhM4s82OicHcJI0IWm9EQw" +
#                          #  "   The answer " +
#                          # "to the riddle is a string of 16 digits, once you have found these digits, add a .com to the end " +
#                          # "and go to the website. Good luck. Think."
#                          body = sh,
#                          from_='+17542038932',
#                          to=numlist[name]
#                      )
#
#     print(message.sid)


call = client.calls.create(
                        method='GET',
                        url= runningrivers,
                        to= testlist["Ben"],
                        from_='+17542038932'
                    )
