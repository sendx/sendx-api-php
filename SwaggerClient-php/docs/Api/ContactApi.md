# Swagger\Client\ContactApi

All URIs are relative to *http://app.sendx.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactIdentifyPost**](ContactApi.md#contactIdentifyPost) | **POST** /contact/identify | Identify a contact as user
[**contactTrackPost**](ContactApi.md#contactTrackPost) | **POST** /contact/track | Add tracking info using tags to a contact


# **contactIdentifyPost**
> \Swagger\Client\Model\ContactResponse contactIdentifyPost($api_key, $team_id, $body)

Identify a contact as user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactApi();
$api_key = "api_key_example"; // string | 
$team_id = "team_id_example"; // string | 
$body = new \Swagger\Client\Model\Contact(); // \Swagger\Client\Model\Contact | Contact details

try {
    $result = $api_instance->contactIdentifyPost($api_key, $team_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactIdentifyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **team_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Contact**](../Model/\Swagger\Client\Model\Contact.md)| Contact details |

### Return type

[**\Swagger\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactTrackPost**
> \Swagger\Client\Model\TrackResponse contactTrackPost($api_key, $team_id, $contact_id, $tag)

Add tracking info using tags to a contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactApi();
$api_key = "api_key_example"; // string | 
$team_id = "team_id_example"; // string | 
$contact_id = "contact_id_example"; // string | 
$tag = "tag_example"; // string | 

try {
    $result = $api_instance->contactTrackPost($api_key, $team_id, $contact_id, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactTrackPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **team_id** | **string**|  |
 **contact_id** | **string**|  |
 **tag** | **string**|  |

### Return type

[**\Swagger\Client\Model\TrackResponse**](../Model/TrackResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
