<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
</head>
<body>

    <div class="flex flex-col items-center space-y-4 mt-8">
        <a href="{{ route('vehicles.create') }}" class="btn btn-primary">Ingreso Nuevo Vehicular</a>
        <a href="" class="btn btn-primary">Ingreso Vehicular</a>
        <a href="{{ route('vehicles.index') }}" class="text-white hover:bg-gray-700 px-3 py-2 rounded">
                Ver Todos los Vehículos
            </a>    
    </div>
    
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

<nav class="fixed top-0 z-50 w-full bg-blue-900 border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a class="flex ms-2 md:me-24">
            <img src="" class="h-8 me-3" alt="FlowBite Logo" />
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white text-white">Escuela Superior de Policía</span>
          </a>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ms-3">
               <a href="" class="flex mx-4 text-gray-300 rounded-xl  hover:text-gray-800  hover:bg-white ">
                  <svg class="w-7 h-7 text-white-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                   </svg>                
               </a>
              <div>       
                <button type="button" class="flex text-sm bg-gray-800 rounded-full ring-2 ring-white focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  
                  <div class="relative inline-flex items-center justify-center w-7 h-7 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                     <span class="font-medium text-gray-600 dark:text-gray-300">
                    <!--
                     @php
                        $letra_nombre = auth()->user()->name;
                     @endphp
                     {{ substr($letra_nombre, 0, 1)}}
                -->

                  </div>                
               </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-900 dark:text-white" role="none">
                    {{ auth()->user()->name}}
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  {{ auth()->user()->email}}
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Configuración</a>
                  </li>
                  <li>
                     <form action="{{ route('logout') }}" method="POST" class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white ">
                        @csrf
                        <button type="submit" 
                                 role="menuitem">
                                 Cerrar Sesión
                        </button>
                     </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>
  
  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 transition-transform -translate-x-full bg-blue-900 border-r border-gray-300 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 " aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto  bg-blue-900 dark:bg-gray-800">
        <div class="flex flex-col items-center px-10 py-3">
            <div class="relative inline-flex items-center justify-center w-14 h-14 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
               <span class="font-medium text-gray-600 dark:text-gray-300 text-xl">
               @php
                  $letra_nombre = auth()->user()->name;
               @endphp
               {{ substr($letra_nombre, 0, 1)}}
            </div>    
           <h5 class="mb-1 text-lg font-medium text-gray-100 dark:text-white">{{ auth()->user()->name}}</h5>
           <span class="text-sm text-gray-400 dark:text-gray-100">{{ auth()->user()->email}}</span>
       </div>
        <ul class="space-y-2 font-medium mt-3">
           <li>
              <a href="{{ route('dashboard') }}" class="flex items-center p-3 text-gray-300 rounded-xl dark:text-white hover:bg-white hover:text-gray-700 group">
                 <svg class="w-7 h-7 text-white-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6.025A7.5 7.5 0 1 0 17.975 14H10V6.025Z"/>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 3c-.169 0-.334.014-.5.025V11h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 13.5 3Z"/>
                  </svg>
                 <span class="ms-3 text-lg font-sans">Dashboard</span>
              </a>
           </li>
           <li>
               <a href="{{ route('products.index')}}" class="flex items-center p-3 text-gray-300 rounded-xl  dark:text-gray-400 hover:bg-white group-hover:text-blue-900 hover:text-gray-700 group">
                  <svg class="w-6 h-6 text-white-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z"/>
                  </svg>
                  <span class="ms-3 text-lg font-sans">Mis Productos</span>
               </a>
            </li>
           <li>
              <a href="{{ route('venta') }}" class="flex items-center p-3 text-gray-300 rounded-xl  dark:text-gray-400 hover:bg-white group-hover:text-blue-900 hover:text-gray-700 group">
                 <svg class="w-6 h-6 text-white-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                  </svg>                
                 <span class="ms-3 text-lg">Ventas</span>
              </a>
           </li>
           <li>
              <a href="{{ route('supply.index') }}" class="flex items-center p-3 text-gray-300 rounded-xl  dark:text-gray-400 hover:bg-white group-hover:text-blue-900 hover:text-gray-700 group">
                 <svg class="w-6 h-6 text-white-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
                  </svg>                
                 <span class="ms-3 text-lg">Compras</span>
              </a>
           </li>
           <li>
              <a href="{{ route('clientes.index') }}" class="flex items-center p-3 text-gray-300 rounded-xl dark:text-white hover:bg-white hover:text-gray-700 group">
                 <svg class="w-6 h-6 text-white-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 6H5m2 3H5m2 3H5m2 3H5m2 3H5m11-1a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2M7 3h11a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Zm8 7a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                  </svg>                
                 <span class="ms-3 text-lg font-sans">Clientes</span>
              </a>
           </li>
           <li>
              <a href="{{ route('suppliers.index') }}" class="flex items-center p-3 text-gray-300 rounded-xl dark:text-white hover:bg-white hover:text-gray-700 group">
                 <svg class="w-6 h-6 text-white-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                  </svg>                                
                 <span class="ms-3 text-lg font-sans">Proveedores</span>
              </a>
           </li>
        </ul>
        <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
           <li>
              <a href="{{ route('profile') }}" class="flex items-center p-3 text-gray-300 rounded-xl dark:text-white hover:bg-white hover:text-gray-700 group">
                 <svg class="w-6 h-6 text-white-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                  </svg>                                               
                 <span class="ms-3 text-lg font-sans">Peril</span>
              </a>
           </li>
           @role('admin')
               <li>
                  <a href="{{ route('users.index') }}" class="flex items-center p-3 text-gray-300 rounded-xl dark:text-white hover:bg-white hover:text-gray-700 group">
                     <svg class="w-6 h-6 text-white-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                        </svg>                                                              
                     <span class="ms-3 text-lg font-sans">Mi Equipo</span>
                  </a>
               </li>
           @endrole
        </ul>
     </div>
  </aside>