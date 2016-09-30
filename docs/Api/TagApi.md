# Swagger\Client\TagApi

All URIs are relative to *http://api.sendx.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tagGet**](TagApi.md#tagGet) | **GET** /tag | Get information about all tags
[**tagPost**](TagApi.md#tagPost) | **POST** /tag | Add a new tag
[**tagTagIdContactDelete**](TagApi.md#tagTagIdContactDelete) | **DELETE** /tag/{tagId}/contact | Remove a contact from a tag
[**tagTagIdContactPost**](TagApi.md#tagTagIdContactPost) | **POST** /tag/{tagId}/contact | Add a contact to a tag
[**tagTagIdContactsGet**](TagApi.md#tagTagIdContactsGet) | **GET** /tag/{tagId}/contacts | Find contacts belonging to a tag
[**tagTagIdDelete**](TagApi.md#tagTagIdDelete) | **DELETE** /tag/{tagId} | Deletes a tag
[**tagTagIdGet**](TagApi.md#tagTagIdGet) | **GET** /tag/{tagId} | Find tag by ID
[**tagTagIdPut**](TagApi.md#tagTagIdPut) | **PUT** /tag/{tagId} | Update a tag by ID


# **tagGet**
> \Swagger\Client\Model\InlineResponse20010 tagGet($api_key)

Get information about all tags



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagApi();
$api_key = "api_key_example"; // string | 

try {
    $result = $api_instance->tagGet($api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->tagGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagPost**
> \Swagger\Client\Model\InlineResponse20011 tagPost($api_key, $body)

Add a new tag



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagApi();
$api_key = "api_key_example"; // string | 
$body = new \Swagger\Client\Model\TagAddUpdate(); // \Swagger\Client\Model\TagAddUpdate | Tag object that needs to be added

try {
    $result = $api_instance->tagPost($api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->tagPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **body** | [**\Swagger\Client\Model\TagAddUpdate**](../Model/\Swagger\Client\Model\TagAddUpdate.md)| Tag object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagTagIdContactDelete**
> tagTagIdContactDelete($api_key, $tag_id, $body)

Remove a contact from a tag



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagApi();
$api_key = "api_key_example"; // string | 
$tag_id = 789; // int | ID of tag for which contact needs to be remove
$body = new \Swagger\Client\Model\TagContact(); // \Swagger\Client\Model\TagContact | Contact email and team id

try {
    $api_instance->tagTagIdContactDelete($api_key, $tag_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->tagTagIdContactDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **tag_id** | **int**| ID of tag for which contact needs to be remove |
 **body** | [**\Swagger\Client\Model\TagContact**](../Model/\Swagger\Client\Model\TagContact.md)| Contact email and team id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagTagIdContactPost**
> \Swagger\Client\Model\InlineResponse20012 tagTagIdContactPost($api_key, $tag_id, $body)

Add a contact to a tag



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagApi();
$api_key = "api_key_example"; // string | 
$tag_id = 789; // int | ID of tag for which the contact needs to be added
$body = new \Swagger\Client\Model\TagContact(); // \Swagger\Client\Model\TagContact | Contact email and team id

try {
    $result = $api_instance->tagTagIdContactPost($api_key, $tag_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->tagTagIdContactPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **tag_id** | **int**| ID of tag for which the contact needs to be added |
 **body** | [**\Swagger\Client\Model\TagContact**](../Model/\Swagger\Client\Model\TagContact.md)| Contact email and team id |

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagTagIdContactsGet**
> \Swagger\Client\Model\DeepTeamEmailContact[] tagTagIdContactsGet($api_key, $tag_id, $limit, $offset, $contact_type, $search)

Find contacts belonging to a tag



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagApi();
$api_key = "api_key_example"; // string | 
$tag_id = 789; // int | ID of tag that needs to be fetched
$limit = 56; // int | Maximum number of contacts to be returned. Note that limit maximum value is 100 and default value is 10.
$offset = 56; // int | Offset from where we contacts should be retrieved. Default value is 0.
$contact_type = "contact_type_example"; // string | Can be any of the following - all, confirmed, unconfirmed, unsubscribed, bounced, markedspam. Default contact_type is all
$search = "search_example"; // string | search term which shall be run against contact's first name, last name and email.

try {
    $result = $api_instance->tagTagIdContactsGet($api_key, $tag_id, $limit, $offset, $contact_type, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->tagTagIdContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **tag_id** | **int**| ID of tag that needs to be fetched |
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

# **tagTagIdDelete**
> tagTagIdDelete($api_key, $tag_id)

Deletes a tag



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagApi();
$api_key = "api_key_example"; // string | 
$tag_id = 789; // int | Tag ID to delete

try {
    $api_instance->tagTagIdDelete($api_key, $tag_id);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->tagTagIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **tag_id** | **int**| Tag ID to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagTagIdGet**
> \Swagger\Client\Model\Tag tagTagIdGet($api_key, $tag_id)

Find tag by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagApi();
$api_key = "api_key_example"; // string | 
$tag_id = 789; // int | ID of tag that needs to be fetched

try {
    $result = $api_instance->tagTagIdGet($api_key, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->tagTagIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **tag_id** | **int**| ID of tag that needs to be fetched |

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagTagIdPut**
> \Swagger\Client\Model\InlineResponse2002 tagTagIdPut($api_key, $tag_id, $body)

Update a tag by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagApi();
$api_key = "api_key_example"; // string | 
$tag_id = 789; // int | ID of tag that needs to be updated
$body = new \Swagger\Client\Model\TagAddUpdate(); // \Swagger\Client\Model\TagAddUpdate | Tag object that needs to be added

try {
    $result = $api_instance->tagTagIdPut($api_key, $tag_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->tagTagIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **tag_id** | **int**| ID of tag that needs to be updated |
 **body** | [**\Swagger\Client\Model\TagAddUpdate**](../Model/\Swagger\Client\Model\TagAddUpdate.md)| Tag object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

