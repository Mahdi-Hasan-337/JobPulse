<style>
    .history-section {
        width: 100%;
        height: 20rem;
        /* border: 1px solid blue; */
        position: relative;
    }

    .center {
        border: 1px solid red;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 100%;
    }
</style>

<section class="history-section border">
    <div class="container">
        <div class="row">
            <div class="center">
                {{ $logoNames->history }}
            </div>
        </div>
    </div>
</section>
