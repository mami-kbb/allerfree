<div class="search-bar">
    <form action="/" class="search-form" method="get">
        <input type="text" class="keyword" name="keyword" value="{{ request('keyword') }}" placeholder="食材・レシピ名でさがす">

        <input type="hidden" name="tab" value="{{ request('tab', 'recommend') }}">

        <div class="allergy-area" id="allergySelect">
            <span id="selectedAllergy">
                除外アレルギー：未選択
            </span>
            <button type="button" class="allergy-button" id="openModal">詳細条件</button>
        </div>
        
        <div class="modal" id="modal">
            <div class="modal-content">
                <span class="close" id="closeModal">&times;</span>
                <p>除外するアレルギーを選択</p>

                @foreach($allergies as $allergy)
                <label>
                    <input type="checkbox" name="allergy_recipe[]"
                            value="{{ $allergy->id }}">
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
const modal = document.getElementById('modal');
const openBtn = document.getElementById('openModal');
const closeBtn = document.getElementById('closeModal');
openBtn.addEventListener('click', () => {
    modal.style.display = 'flex';
});
closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});
window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});

const applyBtn = document.getElementById('applyAllergy');
const selectedText = document.getElementById('selectedAllergy');

applyBtn.addEventListener('click', () => {
    const checked = document.querySelectorAll('input[name="allergy_recipe[]"]:checked');

    const values = Array.from(checked).map(el => el.nextSibling.textContent.trim());

    if (values.length > 0) {
        selectedText.textContent = "除外アレルギー：" + values.join(', ');
    } else {
        selectedText.textContent = "除外アレルギー：未選択";
    }

    modal.style.display = 'none';
});

</script>