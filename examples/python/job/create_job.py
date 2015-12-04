import http.client

conn = http.client.HTTPSConnection("exenzo.nl")

payload = "{\n    \"name\" : \"Job Title\",\n    \"category_id\" : \"OWZ8MLN2\",\n    \"organisation_id\" : \"4BL3Dn1P\",\n    \"city\" : \"Breda\",\n    \"text\" : \"<p>Text<p>\",\n    \"apply_type\" : \"URL\",\n    \"description\" : \"description\",\n    \"apply_url\" : \"http://example.com\",\n    \"segments\" : [\"NEZQ8j9J\", \"45Z6QjOB\", \"dpjdEZ3R\", \"9enVbnWM\", \"eDjXOn7G\", \"GkLe1Lp5\", \"0rnaxwL8\"],\n    \"image\" : \"iVBORw0KGgoAAAANSUhEUgAA....UmVhZHlxyWU8AAAAAElFTkSuQmCC\"\n}"

headers = {
    'x-authorization': "ORGANISATION_API_TOKEN",
    'content-type': "application/json",
    'cache-control': "no-cache"
    }

conn.request("POST", "/api/v1/job", payload, headers)

res = conn.getresponse()
data = res.read()

print(data.decode("utf-8"))