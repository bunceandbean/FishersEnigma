from twilio.rest import Client
import time

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
    "Ava":"+13176254774",
    "Logan":"+13173664664",
    "AJ":"+13173136713",
    "Zach":"+13177746367",
    "Laney":"+13179084522",
    "Carson":"+13177030769",
    "Matt":"+13179890868",
    "Charlie":"+13174370291",
    "Riley":"+13176274005",
    "Mia":"+13175188236",
    "Dylan":"+13176403942",
    "Ben":"+13174039904"

}
b1 = "https://benlilley.neocities.org/babysitter1.xml"
b2 = "https://benlilley.neocities.org/babysitter2.xml"
b3 = "https://benlilley.neocities.org/babysitter3.xml"
for name in numlist:
    if name == "Zayd":
        call = client.calls.create(
                            method='GET',
                            send_digits='12345#',
                            # url="https://benlilley.neocities.org/runningrivers.xml",
                            url=b1,
                            to=numlist[name],
                            from_='+17542038932'
                        )
        time.sleep(32)
        call = client.calls.create(
                            method='GET',
                            send_digits='12345#',
                            # url="https://benlilley.neocities.org/runningrivers.xml",
                            url=b2,
                            to=numlist[name],
                            from_='+17542038932'
                        )
        time.sleep(32)
        call = client.calls.create(
                            method='GET',
                            send_digits='12345#',
                            # url="https://benlilley.neocities.org/runningrivers.xml",
                            url=b3,
                            to=numlist[name],
                            from_='+17542038932'
                        )
