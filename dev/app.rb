require 'webpush'

Webpush.payload_send(
    message: "Salutations.",
    endpoint: "https://fcm.googleapis.com/fcm/send/dZektOzV6hU:APA91bFL3ENp0dcfvllQndEGorXdjY7y92D0fxF4aUM1CQGzOrXLSAA3AxE_KVIGflX62Hf_K5agNqfssaTvPvA7tzVgaxQzyG1rmHQHRoSy1kpgOL90m9dETDeNgDFgDDIkBcJ4u2W4",
    p256dh: "BEvXnCzKj1iFPam9qphf9-Yk5PZkbNARJCH0jS7FevcSga-u8W6Ptsiy_5nHK5qlwaO6b0Uf3gN5bxNHxfRgLVY",
    auth: "Ri8LJaaSS1gtUzC3nj4TRw",
    ttl: 24 * 60 * 60,
    vapid: {
    subject: 'mailto: <dovahkin60@gmail.com>',
    public_key: "BAi_VK3LSqTIkH1hC-kB3OYbRN5yCMg2_jOCZ1xjkMtKS8kvIen0Kn4UKCe8frizqodqYVkxpW_llS20F_Cx3mI",
    private_key: "522KzyHGPwqcANSVp5wot4YT25eVN6DpMAmm1jETUQM"
    }
)
print "Done"
