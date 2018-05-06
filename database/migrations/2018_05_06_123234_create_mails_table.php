<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('timestamp')->nullable();
            $table->string('token')->nullable();
            $table->string('signature')->nullable();
            $table->string('domain')->nullable();
            $table->string('from')->nullable();
            $table->string('x_envelope_from')->nullable();
            $table->string('to')->nullable();
            $table->text('dkim_signature')->nullable();
            $table->string('subject')->nullable();
            $table->text('x_received')->nullable();
            $table->text('in_reply_to')->nullable();
            $table->string('date')->nullable();
            $table->string('message_id')->nullable();
            $table->string('mime_version')->nullable();
            $table->string('received')->nullable();
            $table->string('recipient')->nullable();
            $table->string('sender')->nullable();
            $table->string('x_mailgun_incoming')->nullable();
            $table->text('x_gm_message_state')->nullable();
            $table->text('message_headers')->nullable();
            $table->text('references')->nullable();
            $table->text('content_type')->nullable();
            $table->text('body_plain')->nullable();
            $table->text('body_html')->nullable();
            $table->text('stripped_html')->nullable();
            $table->text('stripped_text')->nullable();
            $table->boolean('stripped_signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mails');
    }
}
