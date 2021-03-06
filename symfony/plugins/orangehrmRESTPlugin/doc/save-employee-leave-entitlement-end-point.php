/**
* @api {post} /employee/:id/entitlement 4.Save Employee Leave Entitlement
* @apiName saveEmployeeLeaveEntitlement
* @apiGroup Leave
* @apiVersion 0.1.0
*
* @apiParam {Number} id Employee id.
* @apiParam {String} leaveType Leave type.
* @apiParam {Date} fromDate From date.
* @apiParam {Date} toDate To date.
* @apiParam {Number} days Number of days.
*
*
* @apiSuccessExample Success-Response:
*     HTTP/1.1 200 OK
*
*      {
*        "success": "Successfully Saved"
*      }
*
*
* @apiError Bad-Response Saving Failed.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 400 Bad Request
*     {
*       "error": ["Saving Failed"]
*     }
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 202 Invalid Parameter
*     {
*       "error": ["Invalid Parameter"]
*     }
*/
