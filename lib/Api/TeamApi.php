<?php
/**
 * TeamApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendX API
 *
 * SendX is built on the simple tenet that users must have open access to their data. SendX API is the first step in that direction. To cite some examples:   - subscribe / unsubscribe a contact from a list   - Schedule campaign to a segment of users   - Trigger transactional emails   - Get / PUT / POST and DELETE operations on team, campaign, list, contact, report etc. and so on.  As companies grow big, custom use cases around email marketing also crop up. SendX API ensures   that SendX platform is able to satisfy such unforeseen use cases. They may range from building     custom reporting dashboard to tagging contacts with custom attributes or triggering emails based on recommendation algorithm.  We do our best to have all our URLs be [RESTful](http://en.wikipedia.org/wiki/Representational_state_transfer). Every endpoint (URL) may support one of four different http verbs. GET requests fetch information about an object, POST requests create objects, PUT requests update objects, and finally DELETE requests will delete objects.  Also all API calls besides:   - Subscribe / unsubscribe signup form  required **api_key** to be passed as **header**   ### The Envelope Every response is contained by an envelope. That is, each response has a predictable set of keys with which you can expect to interact: ```json {     \"status\": \"200\",      \"message\": \"OK\",     \"data\"\": [        {          ...        },        .        .        .     ] } ```  #### Status  The status key is used to communicate extra information about the response to the developer. If all goes well, you'll only ever see a code key with value 200. However, sometimes things go wrong, and in that case you might see a response like: ```json {     \"status\": \"404\" } ```  #### Data  The data key is the meat of the response. It may be a list containing single object or multiple objects  #### Message  This returns back human readable message. This is specially useful to make sense in case of error scenarios.
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

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * TeamApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TeamApi
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
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://127.0.0.1:8080/api/v1');
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
     * @return TeamApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation teamGet
     *
     * Get information about all teams
     *
     * @param string $api_key  (required)
     * @return \Swagger\Client\Model\InlineResponse20012
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamGet($api_key)
    {
        list($response) = $this->teamGetWithHttpInfo($api_key);
        return $response;
    }

    /**
     * Operation teamGetWithHttpInfo
     *
     * Get information about all teams
     *
     * @param string $api_key  (required)
     * @return Array of \Swagger\Client\Model\InlineResponse20012, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamGetWithHttpInfo($api_key)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling teamGet');
        }
        // parse inputs
        $resourcePath = "/team";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse20012',
                '/team'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20012', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20012', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation teamPost
     *
     * Add a new team
     *
     * @param string $api_key  (required)
     * @param \Swagger\Client\Model\TeamAddUpdate $body Team object that needs to be added (required)
     * @return \Swagger\Client\Model\InlineResponse20013
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamPost($api_key, $body)
    {
        list($response) = $this->teamPostWithHttpInfo($api_key, $body);
        return $response;
    }

    /**
     * Operation teamPostWithHttpInfo
     *
     * Add a new team
     *
     * @param string $api_key  (required)
     * @param \Swagger\Client\Model\TeamAddUpdate $body Team object that needs to be added (required)
     * @return Array of \Swagger\Client\Model\InlineResponse20013, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamPostWithHttpInfo($api_key, $body)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling teamPost');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling teamPost');
        }
        // parse inputs
        $resourcePath = "/team";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

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
                '\Swagger\Client\Model\InlineResponse20013',
                '/team'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20013', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20013', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation teamTeamIdCampaignsGet
     *
     * Find campaigns of a team by ID
     *
     * @param string $api_key  (required)
     * @param int $team_id ID of team whose campaigns need to be fetched (required)
     * @return \Swagger\Client\Model\Campaign[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdCampaignsGet($api_key, $team_id)
    {
        list($response) = $this->teamTeamIdCampaignsGetWithHttpInfo($api_key, $team_id);
        return $response;
    }

    /**
     * Operation teamTeamIdCampaignsGetWithHttpInfo
     *
     * Find campaigns of a team by ID
     *
     * @param string $api_key  (required)
     * @param int $team_id ID of team whose campaigns need to be fetched (required)
     * @return Array of \Swagger\Client\Model\Campaign[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdCampaignsGetWithHttpInfo($api_key, $team_id)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling teamTeamIdCampaignsGet');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling teamTeamIdCampaignsGet');
        }
        // parse inputs
        $resourcePath = "/team/{teamId}/campaigns";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // path params
        if ($team_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_id),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Campaign[]',
                '/team/{teamId}/campaigns'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Campaign[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Campaign[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation teamTeamIdContactsGet
     *
     * Find contacts of a team by ID
     *
     * @param string $api_key  (required)
     * @param int $team_id ID of team whose campaigns need to be fetched (required)
     * @param int $limit Maximum number of contacts to be returned. Note that limit maximum value is 100 and default value is 10. (optional)
     * @param int $offset Offset from where we contacts should be retrieved. Default value is 0. (optional)
     * @param string $contact_type Can be any of the following - all, confirmed, unconfirmed, unsubscribed, bounced, markedspam. Default contact_type is all (optional)
     * @param string $search search term which shall be run against contact&#39;s first name, last name and email. (optional)
     * @return \Swagger\Client\Model\DeepTeamEmailContact[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdContactsGet($api_key, $team_id, $limit = null, $offset = null, $contact_type = null, $search = null)
    {
        list($response) = $this->teamTeamIdContactsGetWithHttpInfo($api_key, $team_id, $limit, $offset, $contact_type, $search);
        return $response;
    }

    /**
     * Operation teamTeamIdContactsGetWithHttpInfo
     *
     * Find contacts of a team by ID
     *
     * @param string $api_key  (required)
     * @param int $team_id ID of team whose campaigns need to be fetched (required)
     * @param int $limit Maximum number of contacts to be returned. Note that limit maximum value is 100 and default value is 10. (optional)
     * @param int $offset Offset from where we contacts should be retrieved. Default value is 0. (optional)
     * @param string $contact_type Can be any of the following - all, confirmed, unconfirmed, unsubscribed, bounced, markedspam. Default contact_type is all (optional)
     * @param string $search search term which shall be run against contact&#39;s first name, last name and email. (optional)
     * @return Array of \Swagger\Client\Model\DeepTeamEmailContact[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdContactsGetWithHttpInfo($api_key, $team_id, $limit = null, $offset = null, $contact_type = null, $search = null)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling teamTeamIdContactsGet');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling teamTeamIdContactsGet');
        }
        // parse inputs
        $resourcePath = "/team/{teamId}/contacts";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($contact_type !== null) {
            $queryParams['contact_type'] = $this->apiClient->getSerializer()->toQueryValue($contact_type);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = $this->apiClient->getSerializer()->toQueryValue($search);
        }
        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // path params
        if ($team_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_id),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\DeepTeamEmailContact[]',
                '/team/{teamId}/contacts'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DeepTeamEmailContact[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DeepTeamEmailContact[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation teamTeamIdDelete
     *
     * Deletes a team
     *
     * @param string $api_key  (required)
     * @param int $team_id Team ID to delete (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdDelete($api_key, $team_id)
    {
        list($response) = $this->teamTeamIdDeleteWithHttpInfo($api_key, $team_id);
        return $response;
    }

    /**
     * Operation teamTeamIdDeleteWithHttpInfo
     *
     * Deletes a team
     *
     * @param string $api_key  (required)
     * @param int $team_id Team ID to delete (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdDeleteWithHttpInfo($api_key, $team_id)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling teamTeamIdDelete');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling teamTeamIdDelete');
        }
        // parse inputs
        $resourcePath = "/team/{teamId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // path params
        if ($team_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_id),
                $resourcePath
            );
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/team/{teamId}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation teamTeamIdGet
     *
     * Find team by ID
     *
     * @param string $api_key  (required)
     * @param int $team_id ID of team that needs to be fetched (required)
     * @return \Swagger\Client\Model\Team
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdGet($api_key, $team_id)
    {
        list($response) = $this->teamTeamIdGetWithHttpInfo($api_key, $team_id);
        return $response;
    }

    /**
     * Operation teamTeamIdGetWithHttpInfo
     *
     * Find team by ID
     *
     * @param string $api_key  (required)
     * @param int $team_id ID of team that needs to be fetched (required)
     * @return Array of \Swagger\Client\Model\Team, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdGetWithHttpInfo($api_key, $team_id)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling teamTeamIdGet');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling teamTeamIdGet');
        }
        // parse inputs
        $resourcePath = "/team/{teamId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // path params
        if ($team_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_id),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Team',
                '/team/{teamId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Team', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Team', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation teamTeamIdListsGet
     *
     * Find lists of a team by ID
     *
     * @param string $api_key  (required)
     * @param int $team_id ID of team whose campaigns need to be fetched (required)
     * @return \Swagger\Client\Model\ModelList[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdListsGet($api_key, $team_id)
    {
        list($response) = $this->teamTeamIdListsGetWithHttpInfo($api_key, $team_id);
        return $response;
    }

    /**
     * Operation teamTeamIdListsGetWithHttpInfo
     *
     * Find lists of a team by ID
     *
     * @param string $api_key  (required)
     * @param int $team_id ID of team whose campaigns need to be fetched (required)
     * @return Array of \Swagger\Client\Model\ModelList[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdListsGetWithHttpInfo($api_key, $team_id)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling teamTeamIdListsGet');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling teamTeamIdListsGet');
        }
        // parse inputs
        $resourcePath = "/team/{teamId}/lists";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // path params
        if ($team_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_id),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ModelList[]',
                '/team/{teamId}/lists'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ModelList[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ModelList[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation teamTeamIdPut
     *
     * Update a team by ID
     *
     * @param string $api_key  (required)
     * @param int $team_id ID of team that needs to be updated (required)
     * @param \Swagger\Client\Model\TeamAddUpdate $body Team object that needs to be added (required)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdPut($api_key, $team_id, $body)
    {
        list($response) = $this->teamTeamIdPutWithHttpInfo($api_key, $team_id, $body);
        return $response;
    }

    /**
     * Operation teamTeamIdPutWithHttpInfo
     *
     * Update a team by ID
     *
     * @param string $api_key  (required)
     * @param int $team_id ID of team that needs to be updated (required)
     * @param \Swagger\Client\Model\TeamAddUpdate $body Team object that needs to be added (required)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdPutWithHttpInfo($api_key, $team_id, $body)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling teamTeamIdPut');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling teamTeamIdPut');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling teamTeamIdPut');
        }
        // parse inputs
        $resourcePath = "/team/{teamId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // path params
        if ($team_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_id),
                $resourcePath
            );
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2002',
                '/team/{teamId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2002', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2002', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation teamTeamIdTagsGet
     *
     * Find tags of a team by ID
     *
     * @param string $api_key  (required)
     * @param int $team_id ID of team whose campaigns need to be fetched (required)
     * @return \Swagger\Client\Model\Tag[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdTagsGet($api_key, $team_id)
    {
        list($response) = $this->teamTeamIdTagsGetWithHttpInfo($api_key, $team_id);
        return $response;
    }

    /**
     * Operation teamTeamIdTagsGetWithHttpInfo
     *
     * Find tags of a team by ID
     *
     * @param string $api_key  (required)
     * @param int $team_id ID of team whose campaigns need to be fetched (required)
     * @return Array of \Swagger\Client\Model\Tag[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function teamTeamIdTagsGetWithHttpInfo($api_key, $team_id)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling teamTeamIdTagsGet');
        }
        // verify the required parameter 'team_id' is set
        if ($team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_id when calling teamTeamIdTagsGet');
        }
        // parse inputs
        $resourcePath = "/team/{teamId}/tags";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // path params
        if ($team_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_id),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Tag[]',
                '/team/{teamId}/tags'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Tag[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Tag[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
