import boto3
import json


sqs_client = boto3.client("sqs")

queue_url = "https://sqs.ap-northeast-1.amazonaws.com/372785561596/bpms"

response = sqs_client.send_message(QueueUrl=queue_url, MessageBody="message 1")
print(response)
for ii in response:
    print(ii)
    print(response[ii])

print("------------------------------------------")    
sqs_client.send_message(QueueUrl=queue_url, MessageBody=json.dumps({"key1": 123, "key2": "hoge"}))
response = sqs_client.receive_message(QueueUrl=queue_url, MaxNumberOfMessages=1, VisibilityTimeout=60)
print(response)
