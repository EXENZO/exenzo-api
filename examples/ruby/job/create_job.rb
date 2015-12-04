require 'uri'
require 'net/http'

url = URI("https://exenzo.nl/api/v1/job")

http = Net::HTTP.new(url.host, url.port)
http.use_ssl = true
http.verify_mode = OpenSSL::SSL::VERIFY_NONE

request = Net::HTTP::Post.new(url)
request["x-authorization"] = 'ORGANISATION_API_TOKEN'
request["content-type"] = 'application/json'
request["cache-control"] = 'no-cache'
request.body = "{\n    \"name\" : \"Job Title\",\n    \"category_id\" : \"OWZ8MLN2\",\n    \"organisation_id\" : \"4BL3Dn1P\",\n    \"city\" : \"Breda\",\n    \"text\" : \"<p>Text<p>\",\n    \"apply_type\" : \"URL\",\n    \"description\" : \"description\",\n    \"apply_url\" : \"http://example.com\",\n    \"segments\" : [\"NEZQ8j9J\", \"45Z6QjOB\", \"dpjdEZ3R\", \"9enVbnWM\", \"eDjXOn7G\", \"GkLe1Lp5\", \"0rnaxwL8\"],\n    \"image\" : \"iVBORw0KGgoAAAANSUhEU....hZHlxyWU8AAAAAElFTkSuQmCC\"\n}"

response = http.request(request)
puts response.read_body