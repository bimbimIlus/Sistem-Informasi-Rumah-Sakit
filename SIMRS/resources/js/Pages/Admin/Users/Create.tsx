import AdminLayout from '@/Layouts/AdminLayout';
import { useForm } from '@inertiajs/react';

export default function Create() {

    const { data, setData, post, processing, errors } = useForm({
        name: '',
        email: '',
        password: '',
        role: '',
    });

    const submit = (e: React.FormEvent) => {

        e.preventDefault();

        post('/admin/users');

    };

    return (
        <AdminLayout>

            <div className="p-6 max-w-2xl">

                <h1 className="text-2xl font-bold mb-6">
                    Tambah User
                </h1>

                <form
                    onSubmit={submit}
                    className="bg-white p-6 rounded-2xl shadow space-y-5"
                >

                    {/* NAMA */}
                    <div>

                        <label className="block mb-2 font-medium">
                            Nama
                        </label>

                        <input
                            type="text"
                            value={data.name}
                            onChange={(e) =>
                                setData('name', e.target.value)
                            }
                            className="w-full border border-gray-300 rounded-xl p-3"
                            placeholder="Masukkan nama"
                        />

                        {errors.name && (
                            <div className="text-red-500 text-sm mt-1">
                                {errors.name}
                            </div>
                        )}

                    </div>

                    {/* EMAIL */}
                    <div>

                        <label className="block mb-2 font-medium">
                            Email
                        </label>

                        <input
                            type="email"
                            value={data.email}
                            onChange={(e) =>
                                setData('email', e.target.value)
                            }
                            className="w-full border border-gray-300 rounded-xl p-3"
                            placeholder="Masukkan email"
                        />

                        {errors.email && (
                            <div className="text-red-500 text-sm mt-1">
                                {errors.email}
                            </div>
                        )}

                    </div>

                    {/* PASSWORD */}
                    <div>

                        <label className="block mb-2 font-medium">
                            Password
                        </label>

                        <input
                            type="password"
                            value={data.password}
                            onChange={(e) =>
                                setData('password', e.target.value)
                            }
                            className="w-full border border-gray-300 rounded-xl p-3"
                            placeholder="Masukkan password"
                        />

                        {errors.password && (
                            <div className="text-red-500 text-sm mt-1">
                                {errors.password}
                            </div>
                        )}

                    </div>

                    {/* ROLE */}
                    <div>

                        <label className="block mb-2 font-medium">
                            Role
                        </label>

                        <select
                            value={data.role}
                            onChange={(e) =>
                                setData('role', e.target.value)
                            }
                            className="w-full border border-gray-300 rounded-xl p-3"
                        >

                            <option value="">
                                Pilih Role
                            </option>

                            <option value="admin">
                                Admin
                            </option>

                            <option value="dokter">
                                Dokter
                            </option>

                            <option value="staff">
                                Staff
                            </option>

                            <option value="apoteker">
                                Apoteker
                            </option>

                            <option value="kasir">
                                Kasir
                            </option>

                        </select>

                        {errors.role && (
                            <div className="text-red-500 text-sm mt-1">
                                {errors.role}
                            </div>
                        )}

                    </div>

                    {/* BUTTON */}
                    <button
                        type="submit"
                        disabled={processing}
                        className="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl transition"
                    >
                        {processing ? 'Menyimpan...' : 'Simpan User'}
                    </button>

                </form>

            </div>

        </AdminLayout>
    );
}