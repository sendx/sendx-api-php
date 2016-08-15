# Swagger\Client\UnsubscribeApi

All URIs are relative to *http://127.0.0.1:8080/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**unsubscribeEncryptedListIdPost**](UnsubscribeApi.md#unsubscribeEncryptedListIdPost) | **POST** /unsubscribe/{encryptedListId} | Unsubscribe a user from list based on email id


# **unsubscribeEncryptedListIdPost**
> unsubscribeEncryptedListIdPost($encrypted_list_id, $body)

Unsubscribe a user from list based on email id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UnsubscribeApi();
$encrypted_list_id = "encrypted_list_id_example"; // string | encrypted list Id of the list to which you want to add user
$body = new \Swagger\Client\Model\Email(); // \Swagger\Client\Model\Email | Email object of the user that needs to be unsubscribed.

try {
    $api_instance->unsubscribeEncryptedListIdPost($encrypted_list_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling UnsubscribeApi->unsubscribeEncryptedListIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_list_id** | **string**| encrypted list Id of the list to which you want to add user |
 **body** | [**\Swagger\Client\Model\Email**](../Model/\Swagger\Client\Model\Email.md)| Email object of the user that needs to be unsubscribed. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

