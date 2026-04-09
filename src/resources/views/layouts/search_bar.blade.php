<div class="search-bar" style="position: relative;">
    <form action="{{ route('recipes.list') }}"  class="search-form" method="get">
        <input type="text" class="keyword" id="keywordInput" name="keyword" value="{{ request('keyword') }}" placeholder="食材・レシピ名でさがす" autocomplete="off">

        <input type="hidden" name="tab" value="{{ request('tab', 'recommend') }}">

        <div class="allergy-dropdown" id="allergyDropdown">
            <div class="allergy-area-content">
                <span id="selectedAllergy">
                    除外アレルギー：{{ $selectedAllergies->implode(', ') ?: '未選択'}}
                </span>
                <button type="button" class="allergy-button" id="openModal">詳細条件</button>
            </div>
        </div>

        <div class="modal" id="modal" style="display: none;">
            <div class="modal-content">
                <span class="close" id="closeModal">&times;</span>
                <p>除外するアレルギーを選択</p>

                @php
                    if (request()->has('allergy_recipe')) {
                        $selectedIds = request('allergy_recipe');
                    } elseif (auth()->check()) {
                        $selectedIds = auth()->user()->allergies->pluck('id')->toArray();
                    } else {
                        $selectedIds = [];
                    }
                @endphp

                @foreach($allergies as $allergy)
                <label>
                    <input type="checkbox" name="allergy_recipe[]" class="allergy-checkbox" data-name="{{ $allergy->name }}" value="{{ $allergy->id }}" {{ in_array($allergy->id, $selectedIds) ? 'checked' : '' }}>
                    {{ $allergy->name }}
                </label>
                @endforeach

                <button class="modal-btn" type="button" id="applyAllergy">設定</button>
            </div>
        </div>
        <button class="form-btn" type="submit">検索</button>
    </form>
</div>

<script>
const keywordInput = document.getElementById('keywordInput');
const dropdown = document.getElementById('allergyDropdown');
const modal = document.getElementById('modal');
const openBtn = document.getElementById('openModal');
const closeBtn = document.getElementById('closeModal');
const applyBtn = document.getElementById('applyAllergy');
const selectedText = document.getElementById('selectedAllergy');

keywordInput.addEventListener('focus', () => {
    dropdown.style.display = 'block';
});
openBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    modal.style.display = 'flex';
});
closeBtn.addEventListener('click', () => modal.style.display = 'none');
applyBtn.addEventListener('click', () => {
    const checked = document.querySelectorAll('.allergy-checkbox:checked');
    const names = Array.from(checked).map(el => el.dataset.name);

    if (names.length > 0) {
        selectedText.textContent = "除外アレルギー：" + names.join('，');
    } else {
        selectedText.textContent = "除外アレルギー：未選択";
    }
    modal.style.display = 'none';
});

window.addEventListener('click', (e) => {
    if (!keywordInput.contains(e.target) && !dropdown.contains(e.target) && !modal.contains(e.target)) {
        dropdown.style.display = 'none';
    }
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});
</script>