const axios = require("axios");

axios.post("https://zenoapi.com/api/sms/sender-ids/", {
    sender_id: "Sokabet",
    description: "Betting Platform"
}, {
    headers: {
        "x-api-key": "your_api_key_here",
        "Content-Type": "application/json"
    }
}).then(res => {
    console.log(res.data);
}).catch(err => {
    console.error(err.response.data);
});
