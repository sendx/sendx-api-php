# Swagger\Client\TeamApi

All URIs are relative to *http://api.sendx.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamGet**](TeamApi.md#teamGet) | **GET** /team | Get information about all teams
[**teamPost**](TeamApi.md#teamPost) | **POST** /team | Add a new team
[**teamTeamIdCampaignsGet**](TeamApi.md#teamTeamIdCampaignsGet) | **GET** /team/{teamId}/campaigns | Find campaigns of a team by ID
[**teamTeamIdContactsGet**](TeamApi.md#teamTeamIdContactsGet) | **GET** /team/{teamId}/contacts | Find contacts of a team by ID
[**teamTeamIdDelete**](TeamApi.md#teamTeamIdDelete) | **DELETE** /team/{teamId} | Deletes a team
[**teamTeamIdGet**](TeamApi.md#teamTeamIdGet) | **GET** /team/{teamId} | Find team by ID
[**teamTeamIdListsGet**](TeamApi.md#teamTeamIdListsGet) | **GET** /team/{teamId}/lists | Find lists of a team by ID
[**teamTeamIdPut**](TeamApi.md#teamTeamIdPut) | **PUT** /team/{teamId} | Update a team by ID
[**teamTeamIdTagsGet**](TeamApi.md#teamTeamIdTagsGet) | **GET** /team/{teamId}/tags | Find tags of a team by ID


# **teamGet**
> \Swagger\Client\Model\InlineResponse20013 teamGet($api_key)

Get information about all teams



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamApi();
$api_key = "api_key_example"; // string | 

try {
    $result = $api_instance->teamGet($api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamPost**
> \Swagger\Client\Model\InlineResponse20014 teamPost($api_key, $body)

Add a new team



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamApi();
$api_key = "api_key_example"; // string | 
$body = new \Swagger\Client\Model\TeamAddUpdate(); // \Swagger\Client\Model\TeamAddUpdate | Team object that needs to be added

try {
    $result = $api_instance->teamPost($api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **body** | [**\Swagger\Client\Model\TeamAddUpdate**](../Model/\Swagger\Client\Model\TeamAddUpdate.md)| Team object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamTeamIdCampaignsGet**
> \Swagger\Client\Model\Campaign[] teamTeamIdCampaignsGet($api_key, $team_id)

Find campaigns of a team by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamApi();
$api_key = "api_key_example"; // string | 
$team_id = 789; // int | ID of team whose campaigns need to be fetched

try {
    $result = $api_instance->teamTeamIdCampaignsGet($api_key, $team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamTeamIdCampaignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **team_id** | **int**| ID of team whose campaigns need to be fetched |

### Return type

[**\Swagger\Client\Model\Campaign[]**](../Model/Campaign.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamTeamIdContactsGet**
> \Swagger\Client\Model\DeepTeamEmailContact[] teamTeamIdContactsGet($api_key, $team_id, $limit, $offset, $contact_type, $search)

Find contacts of a team by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamApi();
$api_key = "api_key_example"; // string | 
$team_id = 789; // int | ID of team whose campaigns need to be fetched
$limit = 56; // int | Maximum number of contacts to be returned. Note that limit maximum value is 100 and default value is 10.
$offset = 56; // int | Offset from where we contacts should be retrieved. Default value is 0.
$contact_type = "contact_type_example"; // string | Can be any of the following - all, confirmed, unconfirmed, unsubscribed, bounced, markedspam. Default contact_type is all
$search = "search_example"; // string | search term which shall be run against contact's first name, last name and email.

try {
    $result = $api_instance->teamTeamIdContactsGet($api_key, $team_id, $limit, $offset, $contact_type, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamTeamIdContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **team_id** | **int**| ID of team whose campaigns need to be fetched |
 **limit** | **int**| Maximum number of contacts to be returned. Note that limit maximum value is 100 and default value is 10. | [optional]
 **offset** | **int**| Offset from where we contacts should be retrieved. Default value is 0. | [optional]
 **contact_type** | **string**| Can be any of the following - all, confirmed, unconfirmed, unsubscribed, bounced, markedspam. Default contact_type is all | [optional]
 **search** | **string**| search term which shall be run against contact&#39;s first name, last name and email. | [optional]

### Return type

[**\Swagger\Client\Model\DeepTeamEmailContact[]**](../Model/DeepTeamEmailContact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamTeamIdDelete**
> teamTeamIdDelete($api_key, $team_id)

Deletes a team



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamApi();
$api_key = "api_key_example"; // string | 
$team_id = 789; // int | Team ID to delete

try {
    $api_instance->teamTeamIdDelete($api_key, $team_id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamTeamIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **team_id** | **int**| Team ID to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamTeamIdGet**
> \Swagger\Client\Model\Team teamTeamIdGet($api_key, $team_id)

Find team by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamApi();
$api_key = "api_key_example"; // string | 
$team_id = 789; // int | ID of team that needs to be fetched

try {
    $result = $api_instance->teamTeamIdGet($api_key, $team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamTeamIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **team_id** | **int**| ID of team that needs to be fetched |

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamTeamIdListsGet**
> \Swagger\Client\Model\ModelList[] teamTeamIdListsGet($api_key, $team_id)

Find lists of a team by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamApi();
$api_key = "api_key_example"; // string | 
$team_id = 789; // int | ID of team whose campaigns need to be fetched

try {
    $result = $api_instance->teamTeamIdListsGet($api_key, $team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamTeamIdListsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **team_id** | **int**| ID of team whose campaigns need to be fetched |

### Return type

[**\Swagger\Client\Model\ModelList[]**](../Model/ModelList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamTeamIdPut**
> \Swagger\Client\Model\InlineResponse2002 teamTeamIdPut($api_key, $team_id, $body)

Update a team by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamApi();
$api_key = "api_key_example"; // string | 
$team_id = 789; // int | ID of team that needs to be updated
$body = new \Swagger\Client\Model\TeamAddUpdate(); // \Swagger\Client\Model\TeamAddUpdate | Team object that needs to be added

try {
    $result = $api_instance->teamTeamIdPut($api_key, $team_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamTeamIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **team_id** | **int**| ID of team that needs to be updated |
 **body** | [**\Swagger\Client\Model\TeamAddUpdate**](../Model/\Swagger\Client\Model\TeamAddUpdate.md)| Team object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamTeamIdTagsGet**
> \Swagger\Client\Model\Tag[] teamTeamIdTagsGet($api_key, $team_id)

Find tags of a team by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamApi();
$api_key = "api_key_example"; // string | 
$team_id = 789; // int | ID of team whose campaigns need to be fetched

try {
    $result = $api_instance->teamTeamIdTagsGet($api_key, $team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamTeamIdTagsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **team_id** | **int**| ID of team whose campaigns need to be fetched |

### Return type

[**\Swagger\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

