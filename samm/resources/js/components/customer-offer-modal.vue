<template>
    <div class="modal fade" id="customerServiceOffer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-theme-colored">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title text-white" id="popup_myModalLabel">Reservation Form</h4>
                </div>
                <div class="modal-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Terms and Conditions for Service Request</h3>
                        </div>
                        <div class="panel-body">
                            Introduction
                            These Website Standard Terms and Conditions written on this webpage shall manage your use of
                            our website, Webiste Name accessible at Website.com.

                            These Terms will be applied fully and affect to your use of this Website. By using this
                            Website, you agreed to accept all terms and conditions written in here. You must not use
                            this Website if you disagree with any of these Website Standard Terms and Conditions.

                            Minors or people below 18 years old are not allowed to use this Website.

                            Intellectual Property Rights
                            Other than the content you own, under these Terms, Company Name and/or its licensors own all
                            the intellectual property rights and materials contained in this Website.

                            You are granted limited license only for purposes of viewing the material contained on this
                            Website.

                            Restrictions
                            You are specifically restricted from all of the following:

                            publishing any Website material in any other media;
                            selling, sublicensing and/or otherwise commercializing any Website material;
                            publicly performing and/or showing any Website material;
                            using this Website in any way that is or may be damaging to this Website;
                            using this Website in any way that impacts user access to this Website;
                            using this Website contrary to applicable laws and regulations, or in any way may cause harm
                            to the Website, or to any person or business entity;
                            engaging in any data mining, data harvesting, data extracting or any other similar activity
                            in relation to this Website;
                            using this Website to engage in any advertising or marketing.
                            Certain areas of this Website are restricted from being access by you and Company Name may
                            further restrict access by you to any areas of this Website, at any time, in absolute
                            discretion. Any user ID and password you may have for this Website are confidential and you
                            must maintain confidentiality as well.
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-warning btn-lg  m0-auto"
                            data-dismiss="modal">Decline
                    </button>
                    <button type="button" data-dismiss="modal" class="btn btn-success btn-lg m0-auto">Accept</button>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
