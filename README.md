# Bulk-SMS-Documentation

# 📡 Request Sender ID – ZenoAPI

This endpoint allows you to request a new Sender ID for sending SMS via [ZenoAPI](https://zenoapi.com). Sender IDs help identify the sender of a message (e.g., `Sokabet`, `ZENOPAY`, `BANKSMS`, etc.).

---

## 🔗 Endpoint

```
POST https://zenoapi.com/api/sms/sender-ids/
```

---

## 🔐 Headers

| Key            | Value               |
| -------------- | ------------------- |
| `x-api-key`    | `your_api_key_here` |
| `Content-Type` | `application/json`  |

---

## 📥 Request Body

```json
{
  "sender_id": "Sokabet",
  "description": "Betting Platform"
}
```

* `sender_id`: (Required) The name you'd like to use as the Sender ID. Maximum 11 characters, no spaces.
* `description`: (Required) A short explanation of what the Sender ID will be used for.

---

## ✅ Success Response

```json
{
  "status": "success",
  "message": "Sender ID request submitted successfully",
  "data": {
    "sender_id": "Sokabet",
    "status": "pending"
  }
}
```

* `status`: Will be `pending` until the Zeno team reviews and approves it.


# 📨 Send Bulk SMS – ZenoAPI

This endpoint allows you to send SMS to multiple recipients using your approved Sender ID.

---

## 🔗 Endpoint

```
POST https://zenoapi.com/api/sms/bulk/
```

---

## 🔐 Headers

| Key            | Value               |
| -------------- | ------------------- |
| `x-api-key`    | `your_api_key_here` |
| `Content-Type` | `application/json`  |

---

## 📥 Request Body

```json
{
  "recipients": [
    "255713570435",
    "255652449389",
    "255713570435",
    "255713570435",
    "255714027079"
  ],
  "message": "Beti kirahisi na ushinde na Sokabet",
  "sender_id": "Sokabet",
  "message_type": "alert"
}
```

### 🔸 Parameters

| Field          | Type     | Description                                                       |
| -------------- | -------- | ----------------------------------------------------------------- |
| `recipients`   | `array`  | List of phone numbers in international format (e.g. 2557XXXXXXXX) |
| `message`      | `string` | The content of your SMS message                                   |
| `sender_id`    | `string` | Your **approved** Sender ID                                       |
| `message_type` | `string` | Type of SMS, e.g., `alert` or `marketing`                         |

---

## ✅ Success Response

```json
{
  "status": "success",
  "message": "Messages sent successfully",
  "data": {
    "batch_id": "e04a93dc-b721-44d9-a62e-4d67ab1ff3e9",
    "total": 5,
    "sent": 5
  }
}
```

* `batch_id`: Unique identifier for the SMS batch sent.
* `total`: Total numbers submitted.
* `sent`: Successfully processed recipients.

---

## ⚠️ Notes

* Phone numbers must be in E.164 format (e.g., `2557XXXXXXX`).
* Ensure the `sender_id` is approved before using it.
* Avoid duplicate numbers to save costs.
* If `message_type = marketing`, ensure compliance with opt-in rules.

---

## 📞 Support

Need help? Reach us via:

* 📱 [WhatsApp Support](https://wa.me/255744223030)
* 📧 Email: `support@zenoapi.com`

---