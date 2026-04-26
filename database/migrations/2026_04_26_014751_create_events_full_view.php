<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("
            CREATE OR REPLACE VIEW events_full_view AS
            SELECT
                e.id,
                e.sport_id,
                s.sport,
                e.contest_id,
                c.name,
                e.event_type_id,
                et.event_type,
                e.participant1_id,
                e.participant2_id,
                e.event_start_time,
                e.value,
                e.result,
                e.result_text,
                p1.participant AS participant_1,
                p2.participant AS participant_2
            FROM events AS e
                INNER JOIN sports AS s ON e.sport_id = s.id
                INNER JOIN event_types AS et ON e.event_type_id = et.id
                INNER JOIN contests AS c ON e.contest_id = c.id
                INNER JOIN participants AS p1 ON e.participant1_id = p1.id
                INNER JOIN participants AS p2 ON e.participant2_id = p2.id
        ");
    }

    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS events_full_view");
    }
};
