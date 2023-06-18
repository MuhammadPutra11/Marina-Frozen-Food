<nav class="bg-white py-[18px] relative flex justify-around items-center">
    <div class="flex justify-between z-10">
        <a class="flex" href="/home">
        <img src="{{url('/assets/Logo-MarinaFF.png')}}" alt="Logo" style="width: 35px">
        <div class="font-bold p-2 rounded">Marina Frozen Food</div>
        </a>
    </div>
    <span class="text-3xl content-around bg-red-300 cursor-pointer md:hidden  block ">
        <button onclick="Menu()">Xx</button>
        <!-- <div class="bottom-[-30px] w-10 h-0.5 bg-gray-600"></div>
        <div class="bottom-[-10px] w-9 h-0.5 bg-gray-600"></div>
        <div class=" w-8 h-0.5 bg-gray-600"></div> -->
    </span>
    <div id="sidebar" class="md:flex md:flex-col md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-100 top-[-400px] transition-all ease-in-out duration-500">
        <ul class="flex ml-8">
            <li class=" my-6 md:my-0">
                <a href="/home" class="mx-3 hover:bg-orange-400 rounded py-3 px-5">Home</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="/products" class="mx-3 hover:bg-orange-400 rounded py-3 px-5">Product</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="/about" class="mx-3 hover:bg-orange-400 rounded py-3 px-5">About</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="/contact" class="mx-3 hover:bg-orange-400 rounded py-3 px-5">Contact us</a>
            </li>
        </ul>
    </div>
    
</nav>

<script>
    let menuOpen = false;
    let list = document.querySelector('#sidebar');
    let unlist = document.querySelector('ul');

    const Menu = () => {
        if (menuOpen) {
            list.classList.remove('top-[80px]');
            list.classList.remove('opacity-100');
            unlist.classList.remove('flex');
        } else {
            list.classList.add('top-[80px]');
            list.classList.add('opacity-100');
            unlist.classList.remove('flex');

        }
        console.log("icikiwir naik aselole")
        menuOpen = !menuOpen;
    }
</script>