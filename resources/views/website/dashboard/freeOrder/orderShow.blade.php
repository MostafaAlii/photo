@extends('website.layouts.dashboard')

@section('pageTitle')
Create Order
@endsection

@section('css')
 <link href="{{ asset('website/resources/css/edits.css') }}" rel="stylesheet" />
@endsection

@section('content')

<div class="container dashboard-container pt-5">
      <div class="row">
        <!-- Start Sidebar -->
        <!--<div class="col-12 col-sm-4 col-md-3 nop">-->
        <!--  <div class="sidebar">-->
        <!--    <div class="user-avatar large-avatar">MS</div>-->
        <!--    <div class="user-title">Welcome, mostafa</div>-->
        <!--    <div class="user-email">mo@gmail.com</div>-->
        <!--    <div class="my-btn order-now-btn-mob">-->
        <!--      <a class="nav-link order-now-link" href="#">Order Now</a>-->
        <!--      <div class="my-btn-bg"></div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <!-- End Sidebar -->
        <!-- Start Dashboard -->
        <div class="col-12 col-sm-8 col-md-12">
          <h1 class="page_title px-4 mt-3">create order</h1>
          <!-- Start Dynamic Content -->
          <div class="dashboard-contents py-0">
            <div class="contents create-order-cont">
              <div class="oredr-id">Order <span>#33333</span></div>

              <form>
                <!-- Start Table -->
                <table class="w-100 services-summary mt-3 table d-none">
                  <tr class="head">
                    <td width="20%">Selected Services</td>
                    <td width="20%">Cost/Photo</td>
                    <td width="20%">No. of Photo(s)</td>
                    <td width="20%">Turnaround Time</td>
                    <td width="20%">Service(s) Cost</td>
                  </tr>
                  <tr
                    class="table-row"
                    style="display: table-row"
                    id="service-row-basic"
                  >
                    <td
                      class="selectedService basic_selected_service"
                      class="text-left"
                      width="20%"
                      data-service-name="basic"
                      data-service-price="50"
                    >
                      Basic
                    </td>

                    <!-- service cost -->
                    <td class="image-cost" width="20%">$50</td>

                    <!-- photos count -->
                    <td
                      class="basic-photos-no"
                      width="20%"
                      data-service-name="basic"
                    >
                      0
                    </td>

                    <!-- additional cost per photo -->
                    <td
                      class="basic-additional-cost"
                      width="20%"
                      data-additional-cost="0"
                    >
                      -
                    </td>

                    <!--  total photos cost  -->
                    <td
                      class="service-price"
                      width="20%"
                      id="service-price-basic"
                    ></td>
                  </tr>

                  <tr class="head">
                    <td colspan="4">Grand Total</td>
                    <td colspan="1" id="total-price" class="total-price"></td>
                  </tr>
                </table>
                <!-- End Table -->
                <!-- Service Table -->
                <div class="service_media_details">
                  <!-- Basic service -->
                  <div class="order-service active" id="basic-cont">
                    <div class="order-service-body p-3">
                      <div class="row service_row" data-service-name="basic">
                        <div class="col-md-6 col-sm-12">
                          <div class="photos-cont main-photos-cont">
                            <input
                              class="photo-upload-input"
                              data-service-name="basic"
                              type="file"
                              id="basic"
                              data-service="1"
                              name="basic_img"
                              multiple
                              required
                            />
                            <div class="photos-bg">
                              Drop your Photos here
                              <div>Drag one set per time</div>
                            </div>
                            <div
                              class="imgs_preview_container basic_photos_container"
                            ></div>
                          </div>

                          <div class="photos-cont services-refs-cont">
                            <input
                              class="photo-upload-input service_upload"
                              id="basic"
                              type="file"
                              data-service="1"
                              name="refs_img[]"
                              multiple
                            />
                            <div class="photos-bg">
                              Drop your References here (optional)
                              <div>Drag one set per time</div>
                            </div>
                            <div class="imgs_preview_container"></div>
                          </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                          <textarea
                            name="notes[]"
                            id="basic-ins"
                            placeholder="Describe your requests carefully"
                            required
                          ></textarea>

                          <input
                            type="hidden"
                            name="basic_files_count"
                            class="basic-photos-count"
                          />
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Proccess btn-->
                  <div class="submit-btn-cont my-5" style="display: block">
                    <button
                      type="submit"
                      class="btn submit-order-btn mx-auto justify-content-center align-items-center"
                    >
                      <span class="text">Submit</span>
                      <span class="spinner"></span>
                    </button>
                  </div>
                  <!-- proccess btn-->
                </div>

                <!-- Service Table -->
              </form>
            </div>
          </div>
          <!-- End Dynamic Content -->
        </div>
        <!-- End Dashboard -->
      </div>
    </div>
@endsection

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("select-services-btn").addEventListener("click", function () {
            // Submit the main form
            document.getElementById("mainForm").submit();
            
            // Submit the modal form
            document.getElementById("modalForm").submit();
        });
    });
</script>
@endsection