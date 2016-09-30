# Swagger\Client\SegmentApi

All URIs are relative to *http://api.sendx.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**segmentGet**](SegmentApi.md#segmentGet) | **GET** /segment | Get information about all segments


# **segmentGet**
> \Swagger\Client\Model\InlineResponse20016 segmentGet($api_key)

Get information about all segments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SegmentApi();
$api_key = "api_key_example"; // string | 

try {
    $result = $api_instance->segmentGet($api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->segmentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

