<?php

return [
    'userManagement' => [
        'title'          => 'Manajemen User',
        'title_singular' => 'Manajemen User',
    ],
    'permission' => [
        'title'          => 'Izin',
        'title_singular' => 'Izin',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Peranan',
        'title_singular' => 'Peranan',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Daftar Pengguna',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'assetManagement' => [
        'title'          => 'Asset management',
        'title_singular' => 'Asset management',
    ],
    'assetCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'assetLocation' => [
        'title'          => 'Locations',
        'title_singular' => 'Location',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'assetStatus' => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'asset' => [
        'title'          => 'Assets',
        'title_singular' => 'Asset',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'category'             => 'Category',
            'category_helper'      => ' ',
            'serial_number'        => 'Kode Barang',
            'serial_number_helper' => ' ',
            'name'                 => 'Nama Barang',
            'name_helper'          => ' ',
            'photos'               => 'Photos',
            'photos_helper'        => ' ',
            'status'               => 'Kondisi',
            'status_helper'        => ' ',
            'location'             => 'Lokasi',
            'location_helper'      => ' ',
            'notes'                => 'Keterangan',
            'notes_helper'         => ' ',
            'assigned_to'          => 'Penanggung Jawab',
            'assigned_to_helper'   => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted At',
            'deleted_at_helper'    => ' ',
            'register'             => 'Nomor Register',
            'register_helper'      => ' ',
            'merk'                 => 'Merk / Type',
            'merk_helper'          => ' ',
            'ukuran'               => 'Ukuran',
            'ukuran_helper'        => ' ',
            'bahan'                => 'Bahan',
            'bahan_helper'         => ' ',
            'pemebelian'           => 'Tahun Pembelian',
            'pemebelian_helper'    => ' ',
            'perolehan'            => 'Asal usul Perolehan',
            'perolehan_helper'     => ' ',
            'disposisi'            => 'Disposisi',
            'disposisi_helper'     => ' ',
            'sub_lokasi'           => 'Sub Lokasi',
            'sub_lokasi_helper'    => ' ',
            'lantai'               => 'Lantai',
            'lantai_helper'        => ' ',
            'perintah'             => 'Pemindahan Perintah Dari',
            'perintah_helper'      => ' ',
            'harga'                => 'Harga',
            'harga_helper'         => ' ',
        ],
    ],
    'assetsHistory' => [
        'title'          => 'History Pemindahan',
        'title_singular' => 'History Pemindahan',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'asset'                => 'Asset',
            'asset_helper'         => ' ',
            'status'               => 'Status',
            'status_helper'        => ' ',
            'location'             => 'Location',
            'location_helper'      => ' ',
            'assigned_user'        => 'Assigned User',
            'assigned_user_helper' => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => ' ',
        ],
    ],
    'pengajuan' => [
        'title'          => 'Pengajuan',
        'title_singular' => 'Pengajuan',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name'                => 'Nama',
            'name_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'asset'               => 'Asset',
            'asset_helper'        => ' ',
            'location'            => 'Location',
            'location_helper'     => ' ',
            'sub_location'        => 'Sub Location',
            'sub_location_helper' => ' ',
        ],
    ],

];