<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Co-Lance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex flex-col lg:flex-row md:flex-row bg-gray-100">

        <div class="w-full md:w-1/4 lg:w-1/6 bg-gray-900 shadow-lg">
            <div class="p-4">
                <a href="/">
                    <img src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1695073341/YouTube_Thumbnail_1280x720_px_1_sonpfc.png"
                        alt="Logo" class="w-24 mx-auto mb-4">
                </a>
            </div>
            <div class="p-4 text-center">
                <img src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1694623518/TDS-platform/e1g7fbd5r9ymja0jkxm6.jpg"
                    alt="Admin picture" class="w-24 h-24 rounded-full mx-auto mb-2">
                <h2 class="text-md text-red-600 font-medium">Admin</h2>
                <p class="text-gray-300 text-sm">Foulen ben foulen</p>
            </div>

            <div class="p-4">
                <div id="menu" class="flex flex-col space-y-2">
                    <a href="{{ route('inventory.index') }}"
                        class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"">Inventory</a>
                <a href=" {{ url('/inventories') }}"
                        class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"">Inventories</a>
                <a href=" {{ url('/inventory/create') }}"
                        class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"">Add Inventory</a>
            </div>
        </div>
        <a href=" /auth"
                        class="text-sm mt-auto text-center font-medium text-gray-300 hover:text-red-700 hover:scale-105 rounded-md transition duration-150 ease-in-out p-4 block">
                        Logout
                    </a>
                </div>

                <div class="flex-grow bg-white p-4">
                    <nav class="bg-white shadow-lg p-6 mb-10">
                        <h1 class="text-2xl font-bold text-blue-950">Add Inventory</h1>
                    </nav>
                    <div class="flex flex-col items-center">
                        <div class="w-full max-w-sm">
                            <form action="{{ route('inventory.store') }}" method="post">
                                @csrf
                                <div class="mb-4">
                                    <label for="InventoryName"
                                        class="block text-gray-700 text-sm font-bold mb-2">Inventory Name:</label>
                                    <input type="text" name="InventoryName" id="InventoryName"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="description"
                                        class="block text-gray-700 text-sm font-bold mb-2">Inventory
                                        Description:</label>
                                    <textarea name="description" id="description" rows="3"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        required></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="InventoryLocation"
                                        class="block text-gray-700 text-sm font-bold mb-2">Inventory Location:</label>
                                    <input type="text" name="InventoryLocation" id="InventoryLocation"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="InventoryArchiveDate"
                                        class="block text-gray-700 text-sm font-bold mb-2">Inventory Archive
                                        Date:</label>
                                    <input type="date" name="InventoryArchiveDate" id="InventoryArchiveDate"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="InventoryCategory"
                                        class="block text-gray-700 text-sm font-bold mb-2">Inventory Category:</label>
                                    <input type="text" name="InventoryCategory" id="InventoryCategory"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="InventorySupplier"
                                        class="block text-gray-700 text-sm font-bold mb-2">Inventory Supplier:</label>
                                    <input type="text" name="InventorySupplier" id="InventorySupplier"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        required>
                                </div>
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add
                                    Inventory</button>
                            </form>
                        </div>
                    </div>
                    <div class="bg-white mt-auto p-3 text-gray-600 text-center">
                        <p>&copy; <?php echo date('Y'); ?> Copyrights TDS <span class="ml-2">&trade;</span></p>
                    </div>
                </div>

            </div>
</body>

</html>