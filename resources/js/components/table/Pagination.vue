<template>
  <div v-show="tablePagination && tablePagination.last_page > 1" :class="css.wrapperClass">
      <div class="btn-group mr-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-outline-primary btn-sm" @click="loadPage(1)"
      :class="['btn-nav', css.linkClass, isOnFirstPage ? css.disabledClass : '']">
        <i v-if="css.icons.first != ''" :class="[css.icons.first]"></i>
        <span v-else>&laquo;</span>
        <i class="fas fa-angle-double-left"></i>
    </button>
    <button type="button" class="btn btn-outline-primary btn-sm" @click="loadPage('prev')"
      :class="['btn-nav', css.linkClass, isOnFirstPage ? css.disabledClass : '']">
        <i v-if="css.icons.next != ''" :class="[css.icons.prev]"></i>
        <span v-else>&nbsp;&lsaquo;</span>
        <i class="fas fa-angle-left"></i>
    </button>
</div>
<div class="btn-group mr-2" role="group" aria-label="Second group">
    <template v-if="notEnoughPages">
      <template v-for="n in totalPage">
        <button type="button" class="btn btn-outline-primary btn-sm" @click="loadPage(n)"
          :class="[css.pageClass, isCurrentPage(n) ? css.activeClass : '']"
          v-html="n">
        </button>
      </template>
    </template>
    <template v-else>
      <template v-for="n in windowSize">
        <button type="button" class="btn btn-outline-primary btn-sm" @click="loadPage(windowStart+n-1)"
          :class="[css.pageClass, isCurrentPage(windowStart+n-1) ? css.activeClass : '']"
          v-html="windowStart+n-1">
        </button>
      </template>
    </template>
</div>
<div class="btn-group" role="group" aria-label="Third group">
    <button type="button" class="btn btn-outline-primary btn-sm" @click="loadPage('next')"
      :class="['btn-nav', css.linkClass, isOnLastPage ? css.disabledClass : '']">
      <i v-if="css.icons.next != ''" :class="[css.icons.next]"></i>
      <span v-else>&rsaquo;&nbsp;</span>
      <i class="fas fa-angle-right"></i>
    </button>
    <button type="button" class="btn btn-outline-primary btn-sm" @click="loadPage(totalPage)"
      :class="['btn-nav', css.linkClass, isOnLastPage ? css.disabledClass : '']">
      <i v-if="css.icons.last != ''" :class="[css.icons.last]"></i>
      <span v-else>&raquo;</span>
      <i class="fas fa-angle-double-right"></i>
    </button>

    </div>
  </div>
</template>

<script>
import PaginationMixin from 'vuetable-2/src/components/VuetablePaginationMixin.vue'

export default {
  mixins: [PaginationMixin],
}
</script>
