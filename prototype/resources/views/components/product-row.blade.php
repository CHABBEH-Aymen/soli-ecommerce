<tr>
    <th>
        <label>
            <input type="checkbox" class="checkbox" />
        </label>
    </th>
    <td>
        <div class="flex items-center gap-3">
            <div class="avatar">
                <div class="mask mask-squircle h-12 w-12">
                    <img
                        src="https://m.media-amazon.com/images/I/71h7rOVvygL._AC_SL1500_.jpg"
                        alt="Avatar Tailwind CSS Component" />
                </div>
            </div>
            <div>
                <div class="font-bold">{{ $title }}</div>

                <span class="badge badge-ghost badge-sm">Office Assistant I</span>
            </div>
        </div>
    </td>
    <td>
       {{ $desc }}
    </td>
    <td>{{ $price }}</td>
    <th>
        {{ $slot }}
    </th>
</tr>