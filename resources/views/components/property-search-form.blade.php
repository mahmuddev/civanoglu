<form action="{{ route('properties') }}" method="GET" class="flex justify-between">
    <div class="flex w-7/12 justify-between">
        <div class="flex flex-col mx-3">
            <select name="sale" class="border-0 focus:ring-0">
                <option value="">Buy or Rent</option>
                <option value="1">Buy</option>
                <option value="0">Rent</option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border-2"></div>
        <div class="flex flex-col mx-3">
            <select name="type" class="border-0 focus:ring-0">
                <option value="">Type</option>
                <option value="0">Land</option>
                <option value="1">Appartment</option>
                <option value="2">Villa</option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border-2"></div>
        <div class="flex flex-col mx-3">
            <select name="price" class="border-0 focus:ring-0">
                <option value="">Price</option>
                <option value="100000">0 - 1,00,000</option>
                <option value="200000">1,00,000 - 2,00,000</option>
                <option value="300000">3,00,000 - 4,00,000</option>
                <option value="400000">4,00,000 - 5,00,000</option>
                <option value="500000">5,00,000 <span class="font-serif">+</span></option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border-2"></div>
        <div class="flex flex-col mx-3">
            <select name="bedrooms" class="border-0 focus:ring-0">
                <option value="">Bedrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
    </div>
    <div class="flex justify-between items-center w-4/12 ml-5">
        <input type="search" name="" placeholder="Search by Locationn" class="rounded-lg px-4 py-2 w-full mr-4">
        <button type="submit" class="btn">Search</button>
    </div>
</form>