@php use App\Enums\OrderStatus; @endphp

        <tr class="bg-white border-b cursor-pointer dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition-all">
            <th scope="row"
                class="px-6 py-5 font-medium text-gray-900 whitespace-nowrap dark:text-white flex items-center gap-x-2">

                {{$order->traking_code}}
            </th>
            <td class="px-6 py-5">
                {{$order->total_products}}
            </td>
            <td class="px-6 py-5">
                {{$order->created_at->toJalali()->format('Y/m/d')}}
            </td>
            <td class="px-6 py-5">
                {{number_format($order->total_price)}} تومان
            </td>
            <td class="px-6 py-5  font-DanaDemiBold">
                @switch($order->status)
                    @case(OrderStatus::PENDING)
                        <span class="text-red-500">در انتظار پرداخت</span>
                        @break
                    @case(OrderStatus::PROCESSING)
                        <span style="color: yellow" class="text-red-500">در حال پردازش</span>
                        @break
                    @case(OrderStatus::SENT)
                        <span style="color: orange" class="text-red-500">ارسال شده</span>
                        @break
                    @case(OrderStatus::DELIVERED)
                        <span style="color: green" class="text-red-500">تحویل شده</span>
                        @break
                    @case(OrderStatus::CANCELLED)
                        <span style="color: red" class="text-red-500">کنسل شده</span>
                        @break
                    @case(OrderStatus::REFUND)
                        <span style="color: orange" class="text-red-500">مرجوع شده</span>
                        @break
                @endswitch
            </td>
        </tr>
