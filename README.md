- First clone/download this repo
- Create a database and set the name on `.env`
- Run `php artisan migrate` and `php artisan db:seed`
- Run `php artisan serve` and open browser.

## Description

I'm using [bootstrap-table](https://bootstrap-table.com/), a plugin created by [wenzhixin](https://github.com/wenzhixin/bootstrap-table) to have better functionality, it is similar to DataTables.

I'm using Livewire components to render the table. Check the following files:
- `resources\views\welcome.blade.php`
- `app\Http\Livewire\ShowUsers.php`
- `resources\views\livewire\show-users.blade.php`

## The problem

At first when you open the page you will see different styling/functions because of additional attributes on `<table>` element specified on `show-users.blade.php`

But when you click next pagination OR change value of `Select status:`, you will see livewire resets the additional styling/functions of the bootstrap-table plugin.

## Cause

Livewire does not know anything about the DOM manipulation by other 3rd party plugins.

## Seeking help

I tried using `livewire:ignore` and `livewire:ignore.self` but that did not work.

Note: This is a simplied version of my actual project.

How do I keep the styling and functionaly even after livewire changes the DOM?

Any person give me a valid solution will be rewared with $50 (PayPal/Crypto/Gift card whatever you prefer.)

I am not kidding..!!
