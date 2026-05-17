@extends('layouts.app')

@section('title', 'Edit KRS - ' . $mahasiswa->nama)

@section('content')
    <div class="card">
        <h2>Kelola KRS - {{ $mahasiswa->nama }} ({{ $mahasiswa->nim }})</h2>

        <form action="{{ route('krs.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 1.5rem; padding: 1rem; background: #f0f0f0; border-radius: 4px;">
                <strong style="color: #1a1a1a;">Total SKS Terpilih:</strong> <span id="totalSks" style="font-size: 1.2rem; font-weight: 600; color: #1a1a1a; margin-left: 0.5rem;">0</span>
            </div>

            <div class="checkbox-scrollable">
                <div class="checkbox-group">
                    @foreach ($mataKuliahs as $mk)
                        <div class="checkbox-item">
                            <input type="checkbox" id="mk{{ $mk->id }}" name="mata_kuliah_id[]" value="{{ $mk->id }}" {{ in_array($mk->id, $selected) ? 'checked' : '' }} data-sks="{{ $mk->sks }}" class="mata-kuliah-checkbox">
                            <label for="mk{{ $mk->id }}">
                                <strong>{{ $mk->nama }}</strong>
                                <small>{{ $mk->kode }} ({{ $mk->sks }} SKS)</small>
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Simpan</button>
                <a href="{{ route('krs.index') }}" class="btn" style="background: #666;">Batal</a>
            </div>
        </form>
    </div>

    <script>
        function updateTotalSks() {
            const checkboxes = document.querySelectorAll('.mata-kuliah-checkbox:checked');
            let total = 0;
            checkboxes.forEach(cb => {
                total += parseInt(cb.dataset.sks);
            });
            document.getElementById('totalSks').textContent = total;
        }

        document.querySelectorAll('.mata-kuliah-checkbox').forEach(cb => {
            cb.addEventListener('change', updateTotalSks);
        });

        updateTotalSks();
    </script>
@endsection
