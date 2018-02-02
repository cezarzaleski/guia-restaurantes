<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form id="form">
    <input type="text" name="name" value="Erik's bar">
    <input type="text" name="description" value="Melhor Wiski da região">
    <input type="file" name="photo" id="file">
</form>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">

    $('#file').on('change', function () {

        let formData = new FormData();
        formData.append('name', 'Erik\'s bar');
        formData.append('description', 'Melhor Wiski da região');
        formData.append('photo', $('#file')[0].files[0]);

        let headers = {
            'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImIzYWNlZDNlMmM3MTU2M2NlYWQ0ODhjMzE2NGFmNTA3MDViMzI0NzQwZGJjZjkwMjI0MTYyMGNmYjk1ODg2NDIxMjQ2OTVkZDU3Y2JmYzMyIn0.eyJhdWQiOiIzIiwianRpIjoiYjNhY2VkM2UyYzcxNTYzY2VhZDQ4OGMzMTY0YWY1MDcwNWIzMjQ3NDBkYmNmOTAyMjQxNjIwY2ZiOTU4ODY0MjEyNDY5NWRkNTdjYmZjMzIiLCJpYXQiOjE1MTc1MzQwMjAsIm5iZiI6MTUxNzUzNDAyMCwiZXhwIjoxNTQ5MDcwMDIwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.nLChgAdJd1LhD5jAi6skOUTrQwh6ghajImx8idP41w_H9SYRUc3CeTdhlhkZgplYiX5ZaCSBOdNadLoQZEDjF5QTUBPjJnWy0BKVvaK7a8WpsXDqNGRBU47jx4dkmkbVQ2ZEPYxUVaQJOsxxyiDsAGC97Oxwa-HfZaptE26wJzWjYAIX_By3-LeiZgY94QBR7HX42HP5BxHCzoqTHtETALL2BUBwN0CMK7djJAOAoU-LkGRFr3yU7lNULSTusenE8JeH9MS31akW_m_l5lvJeJ5Z84YZUCZDWqt6mpOb_k--rcpHo4KzHaJOfUTamaAXN7QTA5hEivqr08Q9vU7mHkW-PtGDW7exiphib4xPwCLpKQdY9yHJ4ZUyLTBhtX-7V3JEbN6CbzmQAoCdxXZZ6lqStvKvk9PIR6rOsvPcUsa1pJFt5euIYUu3Qwvo3hPU4Mkdo66oXa33kenfNdqa9QrMrO_6t5hhcsB6XIY5D2F7da2-9D1wXm2fLBeUh-bEuSgF2yFBnMbrAB6L0YMUNiBrkvx9t2irfZrd65Ap8LGgUGXOyPQqlVOoXzHnnw987x_nAQSXLIYrkM7P228tzLElg9dHKyiPP2AGMop0eWx8x3nNesjRl-zaVIBIm3I4T7wd_TQOZ05rDeRPwDI-4mr9vf7JuuUsIXwdje3EZpA',
            //'content-type': 'multipart/form-data'
            'content-type': 'application/x-www-form-urlencoded'
        }

        axios.post('http://localhost:8000/api/v1/restaurants/2', formData, {headers: headers})
    })
</script>
</body>
</html>