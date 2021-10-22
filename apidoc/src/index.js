var app = {};
/**
 * @api {post} /authenticate Authentication
 * @apiName Authenticate
 * @apiGroup Getting Started
 *
 * @apiParam {String} login User login.
 * @apiParam {String} senha User pasword.
 *
 * @apiSuccess {String} id User unique ID of the authenticated user.
 * @apiSuccess {String} name  name of the authenticated user.
 * @apiSuccess {String} access_token JWT token.
 *
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "firstname": "John",
 *       "lastname": "Doe"
 *     }
 *
 * @apiErrorExample Error-Response:
 *     HTTP/1.1 401 Unauthorized
 *     {
 *       "error": "User not found"
 *     }
 *     HTTP/1.1 401 Unauthorized
 *     {
 *       "error": "Password error"
 *     }
 *
 */

app.post('/authenticate');

/**
 * @api {get} /user get Details
 * @apiName Get Details
 * @apiGroup Getting Started
 *
 *
 * @apiSuccess {Int} id id of the authenticate user.
 * @apiSuccess {String} email email of the authenticated user.
 * @apiSuccess {String} login login of the authenticated user.
 */
 app.get('/user');


