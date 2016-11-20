<?php
/**
 * ContactApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendX REST API
 *
 * SendX REST API has two methods:    * Identify   * Track      ## Identify API Method      Identify API Method is used to attach data to a visitor. If a contact is not yet created then we will create the contact. In case contact already exists then we update it.      **Example Request:**       ```json       {         email: \"john.doe@gmail.com\",           firstName: \"John\",         lastName: \"Doe\",         birthday: \"1989-03-03\",         customFields: {            \"Designation\": \"Software Engineer\",           \"Age\": \"27\",            \"Experience\": \"5\"         },           tags: [\"Developer\", \"API Team\"],        }   ```         Note that tags are an array of strings. In case they don't exist previously then API will create them and associate them with the contact.      Similarly if a custom field doesn't exist then it is first created and then associated with the contact along-with the corresponding value. In case custom field exists already then we simply update the value of it for the aforementioned contact.      We don't delete any of the properties based on identify call. What this means is that if for the same contact you did two API calls like:         **API Call A**        ```json       {         email: \"john.doe@gmail.com\",          firstName: \"John\",         birthday: \"1989-03-03\",         customFields: {            \"Designation\": \"Software Engineer\"         },           tags: [\"Developer\"],        }   ```         **API Call B**       ```json       {           email: \"john.doe@gmail.com\",           customFields: {            \"Age\": \"29\"         },           tags: [\"API Team\"],        }   ```         Then the final contact will have firstName as **John**, birthday as **1989-03-03** present. Also both tags **Developer** and **API Team** shall be present along with custom fields **Designation** and **Age**.         **Properties:**      * **firstName**: type string   * **lastName**: type string   * **email**: type string     * **company**: type string     * **birthday**: type string with format **YYYY-MM-DD** eg: 2016-11-21     * **customFields**: type map[string]string      * **tags**: type array of string          **Response:**       ```json       {           \"status\": \"200\",         \"message\": \"OK\",         \"data\": {           \"encryptedTeamId\": \"CLdh9Ig5GLIN1u8gTRvoja\",           \"encryptedId\": \"c9QF63nrBenCaAXe660byz\",           \"tags\": [             \"API Team\",             \"Tech\"           ],           \"firstName\": \"John\",           \"lastName\": \"Doe\",           \"email\": \"john.doe@gmail.com\",           \"company\": \"\",           \"birthday\": \"1989-03-03\",           \"customFields\": {             \"Age\": \"29\",             \"Designation\": \"Software Engineer\"           }           }        }     ```         ## Track API Method         Track API Method is used to associate **tags** with a contact. You can have automation rules based on tag addition and they will get executed. For eg:      * **On user registration** tag start onboarding drip for him / her.   * **Account Upgrade** tag start add user to paid user list and start account expansion drip.       **Response:**       ```json       {         \"status\": \"200\",         \"message\": \"OK\",         \"data\": \"success\"      }   ```
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * ContactApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://app.sendx.io/api/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return ContactApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation contactIdentifyPost
     *
     * Identify a contact as user
     *
     * @param string $api_key  (required)
     * @param string $team_id  (required)
     * @param \Swagger\Client\Model\Contact $body Contact details (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ContactResponse
     */
    public function contactIdentifyPost($api_key, $team_id, $body)
    {
        list($response) = $this->contactIdentifyPostWithHttpInfo($api_key, $team_id, $body);
        return $response;
    }

    /**
     * Operation contactIdentifyPostWithHttpInfo
     *
     * Identify a contact as user
     *
     * @param string $api_key  (required)
     * @param string $team_id  (required)
     * @param \Swagger\Client\Model\Contact $body Contact details (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ContactResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactIdentifyPostWithHttpInfo($api_key, $team_id, $body)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling contactIdentifyPost');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling contactIdentifyPost');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling contactIdentifyPost');
        }
        // parse inputs
        $resourcePath = "/contact/identify";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($team_id !== null) {
            $queryParams['teamId'] = $this->apiClient->getSerializer()->toQueryValue($team_id);
        }
        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ContactResponse',
                '/contact/identify'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ContactResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ContactResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contactTrackPost
     *
     * Add tracking info using tags to a contact
     *
     * @param string $api_key  (required)
     * @param string $team_id  (required)
     * @param string $contact_id  (required)
     * @param string $tag  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\TrackResponse
     */
    public function contactTrackPost($api_key, $team_id, $contact_id, $tag)
    {
        list($response) = $this->contactTrackPostWithHttpInfo($api_key, $team_id, $contact_id, $tag);
        return $response;
    }

    /**
     * Operation contactTrackPostWithHttpInfo
     *
     * Add tracking info using tags to a contact
     *
     * @param string $api_key  (required)
     * @param string $team_id  (required)
     * @param string $contact_id  (required)
     * @param string $tag  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\TrackResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactTrackPostWithHttpInfo($api_key, $team_id, $contact_id, $tag)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling contactTrackPost');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling contactTrackPost');
        }
        // verify the required parameter 'contact_id' is set
        if ($contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_id when calling contactTrackPost');
        }
        // verify the required parameter 'tag' is set
        if ($tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tag when calling contactTrackPost');
        }
        // parse inputs
        $resourcePath = "/contact/track";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($team_id !== null) {
            $queryParams['teamId'] = $this->apiClient->getSerializer()->toQueryValue($team_id);
        }
        // query params
        if ($contact_id !== null) {
            $queryParams['contactId'] = $this->apiClient->getSerializer()->toQueryValue($contact_id);
        }
        // query params
        if ($tag !== null) {
            $queryParams['tag'] = $this->apiClient->getSerializer()->toQueryValue($tag);
        }
        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\TrackResponse',
                '/contact/track'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\TrackResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\TrackResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
