# Swagger\Client\CampaignApi

All URIs are relative to *http://127.0.0.1:8080/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignCampaignIdDelete**](CampaignApi.md#campaignCampaignIdDelete) | **DELETE** /campaign/{campaignId} | Deletes a campaign
[**campaignCampaignIdGet**](CampaignApi.md#campaignCampaignIdGet) | **GET** /campaign/{campaignId} | Find campaign by ID
[**campaignCampaignIdPut**](CampaignApi.md#campaignCampaignIdPut) | **PUT** /campaign/{campaignId} | Update a campaign by ID
[**campaignGet**](CampaignApi.md#campaignGet) | **GET** /campaign | Get information about all campaigns
[**campaignPost**](CampaignApi.md#campaignPost) | **POST** /campaign | Add a new campaign


# **campaignCampaignIdDelete**
> campaignCampaignIdDelete($api_key, $campaign_id)

Deletes a campaign



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CampaignApi();
$api_key = "api_key_example"; // string | 
$campaign_id = 789; // int | Campaign ID to delete

try {
    $api_instance->campaignCampaignIdDelete($api_key, $campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignCampaignIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **campaign_id** | **int**| Campaign ID to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignCampaignIdGet**
> \Swagger\Client\Model\Campaign campaignCampaignIdGet($api_key, $campaign_id)

Find campaign by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CampaignApi();
$api_key = "api_key_example"; // string | 
$campaign_id = 789; // int | ID of campaign that needs to be fetched

try {
    $result = $api_instance->campaignCampaignIdGet($api_key, $campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignCampaignIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **campaign_id** | **int**| ID of campaign that needs to be fetched |

### Return type

[**\Swagger\Client\Model\Campaign**](../Model/Campaign.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignCampaignIdPut**
> \Swagger\Client\Model\InlineResponse2002 campaignCampaignIdPut($api_key, $campaign_id, $body)

Update a campaign by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CampaignApi();
$api_key = "api_key_example"; // string | 
$campaign_id = 789; // int | ID of campaign that needs to be updated
$body = new \Swagger\Client\Model\CampaignAddUpdate(); // \Swagger\Client\Model\CampaignAddUpdate | Campaign object that needs to be added

try {
    $result = $api_instance->campaignCampaignIdPut($api_key, $campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignCampaignIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **campaign_id** | **int**| ID of campaign that needs to be updated |
 **body** | [**\Swagger\Client\Model\CampaignAddUpdate**](../Model/\Swagger\Client\Model\CampaignAddUpdate.md)| Campaign object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignGet**
> \Swagger\Client\Model\InlineResponse200 campaignGet($api_key)

Get information about all campaigns



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CampaignApi();
$api_key = "api_key_example"; // string | 

try {
    $result = $api_instance->campaignGet($api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignPost**
> \Swagger\Client\Model\InlineResponse2001 campaignPost($api_key, $body)

Add a new campaign



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CampaignApi();
$api_key = "api_key_example"; // string | 
$body = new \Swagger\Client\Model\CampaignAddUpdate(); // \Swagger\Client\Model\CampaignAddUpdate | Campaign object that needs to be added

try {
    $result = $api_instance->campaignPost($api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **body** | [**\Swagger\Client\Model\CampaignAddUpdate**](../Model/\Swagger\Client\Model\CampaignAddUpdate.md)| Campaign object that needs to be added |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

