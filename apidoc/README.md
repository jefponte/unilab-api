1. Install ApiDoc

    npm install apidoc -g

2. Add some documentations on ./apidoc/src, like this: 

```js
var app = {}; 

/** 
* @api {get} /cursos Retornar uma lista de cursos 
* @apiName getCursos 
* @apiGroup Cursos 
* 
* @apiSuccess {String} nome Nome do Curso. 
* @apiSuccess {String} categoria  Nome da Categoria. 
*/ 
app.get('/cursos'); 


/** 
* @api {get} /cursos/:id Retornar um curso de acordo com o ID passado 
* @apiName getCurso 
* @apiGroup Cursos 
* 
* @apiParam {Number} ID  ID do curso 
* 
* @apiSuccess {String} nome Nome do Curso. 
* @apiSuccess {String} categoria  Nome da Categoria. 
*/ 
app.get('/cursos');
```

3. Execute apidoc: 

    apidoc -o ../public/docs
