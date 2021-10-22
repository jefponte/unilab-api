/**
 * @api {post} /authenticate JWT Authenticate
 * @apiVersion 1.0.0
 * @apiName Authenticate
 * @apiGroup User
 *
 * @apiDescription Compare version 1.0.0 with 0.2.0 and you will see the green markers with new items in version 1.0.0 and red markers with removed items since 0.2.0.
 *
 * @apiQuery {String} login User unique login
 * @apiQuery {String} senha User password
 *
 * @apiSuccess {Number}   id            The Users-ID.
 * @apiSuccess {String} name  name of the authenticated user.
 * @apiSuccess {String} access_token JWT token.
 * @apiSuccessExample Success-Response:
 *     HTTP/1.1 200 OK
 *     {
 *       "id": 3375,
 *       "nome": "JEFFERSON UCHOA PONTE"
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
 function authenticate() { return; }



/**
 * @api {get} /user/:region/:id/:opt Read data of a User
 * @apiVersion 1.0.0
 * @apiName GetUser
 * @apiGroup User
 *
 * @apiDescription Compare version 1.0.0 with 0.2.0 and you will see the green markers with new items in version 1.0.0 and red markers with removed items since 0.2.0.
 *
 * @apiHeader {String} Authorization The token can be generated from your user profile.
 * @apiHeaderExample {Header} Header-Example
 *     "Authorization: token JWT"
 *
 * @apiExample {bash} Curl example
 * curl -H "Authorization: token 5f048fe" -i https://api.example.com/user/fr-par/4711
 * curl -H "Authorization: token 5f048fe" -H "X-Apidoc-Cool-Factor: superbig" -i https://api.example.com/user/de-ber/1337/yep
 * @apiExample {js} Javascript example
 * const client = AcmeCorpApi('5f048fe');
 * const user = client.getUser(42);
 * @apiExample {python} Python example
 * client = AcmeCorpApi.Client(token="5f048fe")
 * user = client.get_user(42)
 *
 * @apiSuccess {Number}   id            The Users-ID.
 * @apiSuccess {String}   nome          Fullname of the User.
 * @apiSuccess {String}   email         Email of the user.
 *
 * @apiError NoAccessRight Only authenticated Admins can access the data.
 * @apiError UserNotFound   The <code>id</code> of the User was not found.
 * @apiError (500 Internal Server Error) InternalServerError The server encountered an internal error
 *
 * @apiErrorExample Response (example):
 *     HTTP/1.1 401 Not Authenticated
 *     {
 *       "error": "NoAccessRight"
 *     }
 */
 function getUser() { return; }


