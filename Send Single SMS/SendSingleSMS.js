axios.post("https://zenoapi.com/api/sms/send/", {
  recipient: "255713570435",
  message: "Hello from ZenoAPI!",
  sender_id: "ZENOPAY",
  message_type: "alert"
}, {
  headers: {
    "x-api-key": "your_api_key_here",
    "Content-Type": "application/json"
  }
})
