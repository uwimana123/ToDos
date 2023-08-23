<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Todo App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="">
            <div class="todo-table">
                <h1>My Todo list</h1>
                <div class="btn-holder">
                    <a href="add-todo.html" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Todo</a>
                    <button name="action" value="edit" class="btn btn-secondary"><i class="fa fa-edit"></i> Edit Todo</button>
                    <button name="action" value="delete" class="btn btn-danger"><i class="fa fa-times"></i> Delete Todo</button>
                    <button name="action" value="complete" class="btn btn-purple"><i class="fa fa-thumbs-up"></i> Mark Complete</button>
                    <button name="action" value="pending" class="btn btn-orange"><i class="fa fa-thumbs-down"></i> Mark Pending</button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Todo Title</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                            <th>1</th>
                            <th>first task</th>
                            <th>Status</th>  
                    </tbody>
                    
                </table>
            </div>
        </form>
    </div>
</body>
</html>