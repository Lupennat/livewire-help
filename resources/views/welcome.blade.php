<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/extensions/fixed-columns/bootstrap-table-fixed-columns.css">
    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="mt-3">
            <livewire:show-users />
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/extensions/fixed-columns/bootstrap-table-fixed-columns.js"></script>
    @livewireScripts
    <script>
        Livewire.hook('element.updated', (el, component) => {
            $('#table').bootstrapTable()
        })
    </script>
</body>
</html>