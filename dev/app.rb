require 'webpush'

Webpush.payload_send(
    message: "Salutations.",
    endpoint: "https://fcm.googleapis.com/fcm/send/dCSEXCRIny4:APA91bGH9qPqWs6nU6ce-vB3fVaBiBzjNcVtttp9Jt0_LkmrqgHFWqdT561SYjuXW8cDBSvu4Vr6elnvS5KLvqtd5zpHR8e6mlqvpy0s5NQJOo8LdVjtFetcp0uiQrMCltsuwL1T5Ldq",
    p256dh: "BEjHWU0CzB34yKsdufDk5EmB0TJZHdccAe9eokVCv45XFHnBrXhbEgIxoBBN3pVDQO7PLbuy6ICdoLjJ6b7JiCI",
    auth: "lz8O0d1c4eb_q_UP-z4fzw",
    ttl: 24 * 60 * 60,
    vapid: {
    subject: 'mailto: <dovahkin60@gmail.com>',
    public_key: "BAi_VK3LSqTIkH1hC-kB3OYbRN5yCMg2_jOCZ1xjkMtKS8kvIen0Kn4UKCe8frizqodqYVkxpW_llS20F_Cx3mI",
    private_key: "522KzyHGPwqcANSVp5wot4YT25eVN6DpMAmm1jETUQM"
    }
)
print "Done"
