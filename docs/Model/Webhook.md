# # Webhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier | [optional]
**url** | **string** | The URL of the webhook endpoint. |
**description** | **string** | An optional description of what the webhook is used for. | [optional]
**enabled_events** | **string[]** | The list of events to enable for this endpoint. |
**test_mode** | **bool** | Specified whether it was created with a carrier in test mode |
**disabled** | **bool** | Indicates that the webhook is disabled | [optional]
**object_type** | **string** | Specifies the object type | [optional] [default to 'webhook']
**last_event_at** | **\DateTime** | The datetime of the last event sent. | [optional]
**secret** | **string** | Header signature secret |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
