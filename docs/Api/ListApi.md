# Swagger\Client\ListApi

All URIs are relative to *http://api.sendx.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listGet**](ListApi.md#listGet) | **GET** /list | Get information about all lists
[**listListIdContactDelete**](ListApi.md#listListIdContactDelete) | **DELETE** /list/{listId}/contact | Remove a contact from a list
[**listListIdContactPost**](ListApi.md#listListIdContactPost) | **POST** /list/{listId}/contact | Add a contact to a list
[**listListIdContactsGet**](ListApi.md#listListIdContactsGet) | **GET** /list/{listId}/contacts | Find contacts belonging to a list
[**listListIdDelete**](ListApi.md#listListIdDelete) | **DELETE** /list/{listId} | Deletes a list
[**listListIdGet**](ListApi.md#listListIdGet) | **GET** /list/{listId} | Find list by ID
[**listListIdPut**](ListApi.md#listListIdPut) | **PUT** /list/{listId} | Update a list by ID
[**listPost**](ListApi.md#listPost) | **POST** /list | Add a new list


# **listGet**
> \Swagger\Client\Model\InlineResponse2008 listGet($api_key)

Get information about all lists



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ListApi();
$api_key = "api_key_example"; // string | 

try {
    $result = $api_instance->listGet($api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->listGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listListIdContactDelete**
> listListIdContactDelete($api_key, $list_id, $body)

Remove a contact from a list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ListApi();
$api_key = "api_key_example"; // string | 
$list_id = 789; // int | ID of list for which contact needs to be remove
$body = new \Swagger\Client\Model\ListContact(); // \Swagger\Client\Model\ListContact | Contact email and team id

try {
    $api_instance->listListIdContactDelete($api_key, $list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->listListIdContactDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **list_id** | **int**| ID of list for which contact needs to be remove |
 **body** | [**\Swagger\Client\Model\ListContact**](../Model/\Swagger\Client\Model\ListContact.md)| Contact email and team id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listListIdContactPost**
> \Swagger\Client\Model\InlineResponse20015 listListIdContactPost($api_key, $list_id, $body)

Add a contact to a list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ListApi();
$api_key = "api_key_example"; // string | 
$list_id = 789; // int | ID of list for which the contact needs to be added
$body = new \Swagger\Client\Model\ListContact(); // \Swagger\Client\Model\ListContact | Contact email and team id

try {
    $result = $api_instance->listListIdContactPost($api_key, $list_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->listListIdContactPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **list_id** | **int**| ID of list for which the contact needs to be added |
 **body** | [**\Swagger\Client\Model\ListContact**](../Model/\Swagger\Client\Model\ListContact.md)| Contact email and team id |

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listListIdContactsGet**
> \Swagger\Client\Model\DeepListEmailContact[] listListIdContactsGet($api_key, $list_id, $limit, $offset, $contact_type, $search)

Find contacts belonging to a list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ListApi();
$api_key = "api_key_example"; // string | 
$list_id = 789; // int | ID of list that needs to be fetched
$limit = 56; // int | Maximum number of contacts to be returned. Note that limit maximum value is 100 and default value is 10.
$offset = 56; // int | Offset from where we contacts should be retrieved. Default value is 0.
$contact_type = "contact_type_example"; // string | Can be any of the following - all, confirmed, unconfirmed, unsubscribed, bounced, markedspam. Default contact_type is all
$search = "search_example"; // string | search term which shall be run against contact's first name, last name and email.

try {
    $result = $api_instance->listListIdContactsGet($api_key, $list_id, $limit, $offset, $contact_type, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->listListIdContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **list_id** | **int**| ID of list that needs to be fetched |
 **limit** | **int**| Maximum number of contacts to be returned. Note that limit maximum value is 100 and default value is 10. | [optional]
 **offset** | **int**| Offset from where we contacts should be retrieved. Default value is 0. | [optional]
 **contact_type** | **string**| Can be any of the following - all, confirmed, unconfirmed, unsubscribed, bounced, markedspam. Default contact_type is all | [optional]
 **search** | **string**| search term which shall be run against contact&#39;s first name, last name and email. | [optional]

### Return type

[**\Swagger\Client\Model\DeepListEmailContact[]**](../Model/DeepListEmailContact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listListIdDelete**
> listListIdDelete($api_key, $list_id)

Deletes a list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ListApi();
$api_key = "api_key_example"; // string | 
$list_id = 789; // int | List ID to delete

try {
    $api_instance->listListIdDelete($api_key, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->listListIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **list_id** | **int**| List ID to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listListIdGet**
> \Swagger\Client\Model\ModelList listListIdGet($api_key, $list_id)

Find list by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ListApi();
$api_key = "api_key_example"; // string | 
$list_id = 789; // int | ID of list that needs to be fetched

try {
    $result = $api_instance->listListIdGet($api_key, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->listListIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **list_id** | **int**| ID of list that needs to be fetched |

### Return type

[**\Swagger\Client\Model\ModelList**](../Model/ModelList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listListIdPut**
> \Swagger\Client\Model\InlineResponse2002 listListIdPut($api_key, $list_id, $body)

Update a list by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ListApi();
$api_key = "api_key_example"; // string | 
$list_id = 789; // int | ID of list that needs to be updated
$body = new \Swagger\Client\Model\ListAddUpdate(); // \Swagger\Client\Model\ListAddUpdate | List object that needs to be added

try {
    $result = $api_instance->listListIdPut($api_key, $list_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->listListIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **list_id** | **int**| ID of list that needs to be updated |
 **body** | [**\Swagger\Client\Model\ListAddUpdate**](../Model/\Swagger\Client\Model\ListAddUpdate.md)| List object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPost**
> \Swagger\Client\Model\InlineResponse2009 listPost($api_key, $body)

Add a new list

Adding a new list with all the fields. List type can be 0 - Single OptIn 1 - Double OptIn

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ListApi();
$api_key = "api_key_example"; // string | 
$body = new \Swagger\Client\Model\ListAddUpdate(); // \Swagger\Client\Model\ListAddUpdate | List object that needs to be added

try {
    $result = $api_instance->listPost($api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->listPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **body** | [**\Swagger\Client\Model\ListAddUpdate**](../Model/\Swagger\Client\Model\ListAddUpdate.md)| List object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

