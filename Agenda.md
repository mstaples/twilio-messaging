# Programmable Messaging

## Context

What is a message
- SMS: Short Message Service: 160 characters auto-parsed
- MMS: Media Message Service: media content auto-parsed
- Shortcode / Longcode
- WhatsApp, RCS

# Getting started with (stateless) messages
- Message API
    - docs: https://www.twilio.com/docs/sms
        - quickstarts by language
            - composer require twilio/sdk
            - composer install
        - api reference Create a Messaging Resource examples by language
            - sid, token => client
            - create(DESTINATION_PHONE, TWILIO_PHONE, Body or MediaUrl)
        - CLI tool: https://www.twilio.com/docs/twilio-cli/quickstart
            - guided setup / installation: twilio login
            - upgrade your experience: twilio autocomplete bash
            - explore: twilio
        - the Console: https://console.twilio.com/
            - embedded docs
            - customize side-bar to your match your goals
        - Dev Phone: https://www.twilio.com/docs/labs/dev-phone

# Cloud hosted messaging
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
- Messaging Services
    - Sender pool: sticky sender, geomatch, auto-fallback sending
    - Compliance and best practices
    - Learn more in the advanced Messaging and Level Up sessions

# Complex interactions (state in the stateless)
- (Webhook / ngrok)
- Visual orchestration of interactions: Studio
    - Getting started resources
    - Navigating the editor canvas
    - Adding and modifying widgets
    - Using the Flow logs
    - Learn more in the Level Up session
- Conversations: https://www.twilio.com/conversations-api
    - Omni-channel
    - Group texting
- Next level orchistration: Flex https://www.twilio.com/docs/flex
- Next level state tracking: Segment https://www.twilio.com/segment-hello
