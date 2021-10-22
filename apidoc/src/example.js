
/**
 * @apiDefine admin:computer User access only
 * This optional description belong to to the group admin.
 */


/**
 * @api {post} /authenticate JWT Authenticate
 * @apiVersion 1.0.0
 * @apiName Authenticate
 * @apiGroup User
 *
 * @apiDescription Compare version 1.0.0 with 0.2.0 and you will see the green markers with new items in version 1.0.0 and red markers with removed items since 0.2.0.
 *
 * @apiHeader {String} Authorization The token can be generated from your user profile.
 * @apiHeader {String} X-Apidoc-Cool-Factor=big Some other header with a default value.
 * @apiHeaderExample {Header} Header-Example
 *     "Authorization: token 5f048fe"
 * @apiQuery {Number} id User unique ID
 * @apiQuery {String} region=fr-par User region
 * @apiQuery {String} [opt] An optional param
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
 * @apiSuccess {Date}     registered    Registration Date.
 * @apiSuccess {String}   name          Fullname of the User.
 * @apiSuccess {String[]} nicknames     List of Users nicknames (Array of Strings).
 * @apiSuccess {Object}   profile       Profile data (example for an Object)
 * @apiSuccess {Number}   profile.age   Users age.
 * @apiSuccess {String}   profile.image Avatar-Image.
 * @apiSuccess {Object[]} options       List of Users options (Array of Objects).
 * @apiSuccess {String}   options.name  Option Name.
 * @apiSuccess {String}   options.value Option Value.
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
 function authenticate() { return; }



/**
 * @api {get} /user/:region/:id/:opt Read data of a User
 * @apiVersion 1.0.0
 * @apiName GetUser
 * @apiGroup User
 * @apiPermission admin:computer
 *
 * @apiDescription Compare version 1.0.0 with 0.2.0 and you will see the green markers with new items in version 1.0.0 and red markers with removed items since 0.2.0.
 *
 * @apiHeader {String} Authorization The token can be generated from your user profile.
 * @apiHeader {String} X-Apidoc-Cool-Factor=big Some other header with a default value.
 * @apiHeaderExample {Header} Header-Example
 *     "Authorization: token 5f048fe"
 * @apiQuery {Number} id User unique ID
 * @apiQuery {String} region=fr-par User region
 * @apiQuery {String} [opt] An optional param
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
 * @apiSuccess {Date}     registered    Registration Date.
 * @apiSuccess {String}   name          Fullname of the User.
 * @apiSuccess {String[]} nicknames     List of Users nicknames (Array of Strings).
 * @apiSuccess {Object}   profile       Profile data (example for an Object)
 * @apiSuccess {Number}   profile.age   Users age.
 * @apiSuccess {String}   profile.image Avatar-Image.
 * @apiSuccess {Object[]} options       List of Users options (Array of Objects).
 * @apiSuccess {String}   options.name  Option Name.
 * @apiSuccess {String}   options.value Option Value.
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


