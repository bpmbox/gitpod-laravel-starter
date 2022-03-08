    1  pip install aws-sam-cli
    2  sam
    3  sam init
    4  cd ./sam-app/
    5  sam local start-api
    6  sam local generate-event dynamodb update | sam local invoke --event - ReadDynamoDBEvent
    7  history awssam.sh
    8  history > awssam.sh
