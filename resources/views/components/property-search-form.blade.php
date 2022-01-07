<form action="{{ route('properties') }}" method="GET" class="flex justify-between">
    <div class="flex w-7/12 justify-between">
        <div class="flex flex-col mx-3">
            <select name="sale" class="border-0 focus:ring-0">
                <option value="">Buy or Rent</option>
                <option {{ request('sale') == '1' ? 'selected="selected"' : '' }} value="1">Buy</option>
                <option {{ request('sale') == '0' ? 'selected="selected"' : '' }} value="0">Rent</option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border-2"></div>
        <div class="flex flex-col mx-3">
            <select name="type" class="border-0 focus:ring-0">
                <option value="">Type</option>
                <option {{ request('type') == '0' ? 'selected="selected"' : '' }} value="0">Land</option>
                <option {{ request('type') == '1' ? 'selected="selected"' : '' }} value="1">Appartment</option>
                <option {{ request('type') == '2' ? 'selected="selected"' : '' }} value="2">Villa</option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border-2"></div>
        <div class="flex flex-col mx-3">
            <select name="price" class="border-0 focus:ring-0">
                <option value="">Price</option>
                <option {{ request('price') == '100000' ? 'selected="selected"' : '' }} value="100000">0 - 1,00,000</option>
                <option {{ request('price') == '200000' ? 'selected="selected"' : '' }} value="200000">1,00,000 - 2,00,000</option>
                <option {{ request('price') == '300000' ? 'selected="selected"' : '' }} value="300000">3,00,000 - 4,00,000</option>
                <option {{ request('price') == '400000' ? 'selected="selected"' : '' }} value="400000">4,00,000 - 5,00,000</option>
                <option {{ request('price') == '500000' ? 'selected="selected"' : '' }} value="500000">5,00,000 <span class="font-serif">+</span></option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border-2"></div>
        <div class="flex flex-col mx-3">
            <select name="bedrooms" class="border-0 focus:ring-0">
                <option value="">Bedrooms</option>
                <option {{ request('bedrooms') == '1' ? 'selected="selected"' : '' }} value="1">1</option>
                <option {{ request('bedrooms') == '2' ? 'selected="selected"' : '' }} value="2">2</option>
                <option {{ request('bedrooms') == '3' ? 'selected="selected"' : '' }} value="3">3</option>
                <option {{ request('bedrooms') == '4' ? 'selected="selected"' : '' }} value="4">4</option>
                <option {{ request('bedrooms') == '5' ? 'selected="selected"' : '' }} value="5">5</option>
            </select>
        </div>
    </div>
    <div class="flex justify-between items-center w-4/12 ml-5">
        <input type="search" name="" placeholder="Search by Locationn" class="rounded-lg px-4 py-2 w-full mr-4">
        <button type="submit" class="btn">Search</button>
    </div>
</form>