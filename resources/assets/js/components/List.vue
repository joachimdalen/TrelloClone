<template>
    <div class="list">
        <div class="list-container">
            <div class="list-header">This is my list</div>
            <div class="list-item-container">
                <div class="list-item">
                    <div class="new-card">
                        <a>Add new card...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
