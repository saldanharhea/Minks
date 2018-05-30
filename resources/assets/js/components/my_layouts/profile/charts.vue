

<template>
    <div >
        <div class="container topers" style="height: 600px;">
            <main>
                <div class="Chart">
                    <h3 class="font-new m--font-primary pt-5   pb-3 pl-5 " style="margin-top: -10px;">  TRANSACTION GRAPH</h3>
                    <line-example class="pt-5"></line-example>
                </div>
            </main>
        </div>
    </div>
</template>

<script>
    import LineExample from './lineChart'
    export default {

        components: {
            LineExample
        }
    }
</script>


