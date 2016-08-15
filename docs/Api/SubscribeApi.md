# Swagger\Client\SubscribeApi

All URIs are relative to *http://127.0.0.1:8080/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscribeEncryptedListIdPost**](SubscribeApi.md#subscribeEncryptedListIdPost) | **POST** /subscribe/{encryptedListId} | Subscribe a new user a list
[**subscribeEncryptedListIdPut**](SubscribeApi.md#subscribeEncryptedListIdPut) | **PUT** /subscribe/{encryptedListId} | Subscribe an existing user a list


# **subscribeEncryptedListIdPost**
> subscribeEncryptedListIdPost($encrypted_list_id, $body)

Subscribe a new user a list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscribeApi();
$encrypted_list_id = "encrypted_list_id_example"; // string | encrypted list Id of the list to which you want to add user
$body = new \Swagger\Client\Model\ContactAddUpdate(); // \Swagger\Client\Model\ContactAddUpdate | Contact object that needs to be added

try {
    $api_instance->subscribeEncryptedListIdPost($encrypted_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SubscribeApi->subscribeEncryptedListIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_list_id** | **string**| encrypted list Id of the list to which you want to add user |
 **body** | [**\Swagger\Client\Model\ContactAddUpdate**](../Model/\Swagger\Client\Model\ContactAddUpdate.md)| Contact object that needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscribeEncryptedListIdPut**
> subscribeEncryptedListIdPut($encrypted_list_id, $body)

Subscribe an existing user a list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SubscribeApi();
$encrypted_list_id = "encrypted_list_id_example"; // string | encrypted list Id of the list to which you want to add user
$body = new \Swagger\Client\Model\Email(); // \Swagger\Client\Model\Email | Contact Emil needs to be added

try {
    $api_instance->subscribeEncryptedListIdPut($encrypted_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SubscribeApi->subscribeEncryptedListIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_list_id** | **string**| encrypted list Id of the list to which you want to add user |
 **body** | [**\Swagger\Client\Model\Email**](../Model/\Swagger\Client\Model\Email.md)| Contact Emil needs to be added |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

