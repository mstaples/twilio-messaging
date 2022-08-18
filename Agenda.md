# Programmable Messaging

## Context

What is a message
- SMS: Short Message Service: 160 characters auto-parsed
- MMS: Media Message Service: media content auto-parsed
- Shortcode / Longcode
- WhatsApp

# Sending (Stateless) Messages
- Message API
    - docs: https://www.twilio.com/docs/sms
        - quickstarts by language
            - composer require twilio/sdk
            - composer install
        - api reference Create a Messaging Resource examples by language
            - sid, token => client
            - create(DESTINATION_PHONE, TWILIO_PHONE, Body or MediaUrl)
        - CLI tool
            - guided setup / installation
            - twilio api:core:messages:create --to=+$PERSONAL_PHONE_NUMBER --from=+$TWILIO_PHONE_NUMBER --body="Hiya fren" --properties=sid,status

# Two-way Messages
- TWIML: https://www.twilio.com/docs/messaging/twiml
    - TWIML bins
- Functions (Serverless): https://www.twilio.com/code-exchange/basic-sms-auto-response
    - generated webhook url
    - generated asset url
    - use Assets to host images
        - use hosted Assets in the CLI: twilio api:core:messages:create [...] imageUrl=https://hello-messaging...
- Monitor
    - Logs / Messaging
    - Insights
    - custom status tracking
- Regulations and Guidelines
- Messaging Services

# Complex Interactions (state in the stateless)
- (Webhook / ngrok)
- (Foreshadowing the Studio talk)
- Conversations: https://www.twilio.com/conversations-api
    - Omni-channel
    - Group texting
