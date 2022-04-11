<!DOCTYPE html>
<html
    lang="en"
    class="h-full"
>

<head>
    <meta charset="UTF-8">
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        dialog {
            transform: translateY(250px);
            animation: 0.3s fade-in;
        }

        dialog::backdrop {
            background: rgb(34, 34, 34, .4);
        }

        @keyframes fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        dialog[open] {
            transform: translateY(0);
        }

        dialog::backdrop {
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body class="h-full">

    <div class="flex flex-col w-full h-full max-w-4xl mx-auto bg-white">
        <header class="p-8 text-white bg-indigo-500">
            <h1 class="text-lg text-white">Hello!</h1>
        </header>
        <main class="p-8 bg-gray-50 grow">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima odio qui molestias quisquam voluptatum
                vero atque nostrum perspiciatis illo magnam unde aliquam amet, tenetur corrupti voluptatem possimus
                ipsam. Totam, quisquam.</p>
            <p>Assumenda debitis qui inventore sequi voluptatum ipsum, asperiores alias perferendis pariatur mollitia
                quas autem rerum vero quia! Fugit dolorum ipsa dignissimos, architecto inventore totam laboriosam
                veniam, incidunt labore non animi.</p>
            <p>Eum nobis aspernatur quis perferendis cumque nihil suscipit deleniti accusamus, assumenda voluptas
                temporibus sequi. Necessitatibus quis, veniam illo quas explicabo repudiandae blanditiis harum, ullam
                dolorum cumque adipisci atque voluptate consectetur!</p>
            <p>Doloremque nihil autem harum, accusamus, inventore quidem, minus velit modi sint quas a ad maxime.
                Dolorum eos beatae iure voluptatibus, dolorem dolore numquam alias nisi ipsum soluta eum similique
                commodi.</p>

                <p class="space-x-4">
                    <button data-dialog="invoice-create">Invoice Create</button>
                    <button data-dialog="invoice-update">Invoice Update</button>
                </p>
        </main>
        <footer class="p-8 text-white bg-indigo-500">My App</footer>

        <dialog
            x-data
            id="invoice-create"
            class="max-w-lg p-0 border border-black rounded-lg"
        >
            <header class="px-4 py-2 text-white bg-indigo-500">
                <h3>Invoice-Create: Are you sure?</h3>
            </header>
            <main class="px-4 my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, corporis
                eveniet aut nulla modi,
                asperiores, id eaque vitae officiis commodi ullam minus! Facere debitis harum illum ratione
                exercitationem temporibus quam corrupti quod cupiditate ut quas eum voluptate laborum tempore ipsum
                nobis in beatae, quibusdam corporis cum mollitia soluta incidunt optio?</main>
            <footer class="px-4 my-4">
                <form
                    method="dialog"
                >
                    <button value="yes">Yes</button>
                    <button value="no">No</button>
                </form>
            </footer>
        </dialog>
        <dialog
            x-data
            @close="alert('I was closed. You pressed: ' + $el.returnValue )"
            id="invoice-update"
            class="max-w-lg p-0 border border-black rounded-lg"
        >
            <header class="px-4 py-2 text-white bg-indigo-500">
                <h3>Invoice-Update: Are you sure?</h3>
            </header>
            <main class="px-4 my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, corporis
                eveniet aut nulla modi,
                asperiores, id eaque vitae officiis commodi ullam minus! Facere debitis harum illum ratione
                exercitationem temporibus quam corrupti quod cupiditate ut quas eum voluptate laborum tempore ipsum
                nobis in beatae, quibusdam corporis cum mollitia soluta incidunt optio?</main>
            <footer class="px-4 my-4">
                <form
                    method="dialog"
                >
                    <button value="live">Live</button>
                    <button value="die">Die</button>
                </form>
            </footer>
        </dialog>
    </div>

    <script>
        (function () {
            document.querySelectorAll('button[data-dialog]').forEach(button => {
                button.addEventListener('click', e => {
                    document.querySelector('#' +e.target.dataset.dialog).showModal();
                })
            })
        })();
    </script>
</body>

</html>
